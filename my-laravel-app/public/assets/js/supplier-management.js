/**
 * Supplier Management JavaScript
 * Handles CRUD operations for suppliers
 */

$(document).ready(function () {
    // Load all suppliers for supplier listing page
    if ($("#supplierTable").length) {
        loadSuppliers();
    }

    // Form submission for adding a supplier
    $("#addSupplierForm").on("submit", function (e) {
        e.preventDefault();

        // Disable submit button during form submission
        $("#addSupplierBtn").prop("disabled", true).html("Processing...");

        // Get form data
        const formData = $(this).serialize();

        // Make AJAX request
        $.ajax({
            url: supplierRoutes.add,
            type: "POST",
            data: formData,
            dataType: "json",
            success: function (response) {
                if (response.status) {
                    showMessage("success", response.message);

                    // Reset form
                    $("#addSupplierForm")[0].reset();
                } else {
                    showMessage("error", response.message);
                }
            },
            error: function (xhr) {
                handleAjaxError(xhr);
            },
            complete: function () {
                // Re-enable submit button
                $("#addSupplierBtn")
                    .prop("disabled", false)
                    .html("Add Supplier");
            },
        });
    });

    // Form submission for updating a supplier
    $("#updateSupplierForm").on("submit", function (e) {
        e.preventDefault();

        const supplierId = $("#edit_supplier_id").val();

        // Disable submit button during form submission
        $("#updateSupplierBtn").prop("disabled", true).html("Processing...");

        // Get form data
        const formData = $(this).serialize();

        // Make AJAX request
        $.ajax({
            url: supplierRoutes.update.replace("__ID__", supplierId),
            type: "PUT",
            data: formData,
            dataType: "json",
            success: function (response) {
                if (response.status) {
                    showMessage("success", response.message);

                    // Close modal if it exists
                    if ($("#editSupplierModal").length) {
                        $("#editSupplierModal").modal("hide");
                    }

                    // Reload supplier table if on listing page
                    if ($("#supplierTable").length) {
                        loadSuppliers();
                    }
                } else {
                    showMessage("error", response.message);
                }
            },
            error: function (xhr) {
                handleAjaxError(xhr);
            },
            complete: function () {
                // Re-enable submit button
                $("#updateSupplierBtn")
                    .prop("disabled", false)
                    .html("Update Supplier");
            },
        });
    });

    // Delete supplier functionality
    $(document).on("click", ".delete-supplier", function () {
        const supplierId = $(this).data("id");
        const supplierName = $(this).data("name");

        if (
            confirm(
                `Are you sure you want to delete the supplier: ${supplierName}?`
            )
        ) {
            $.ajax({
                url: supplierRoutes.delete.replace("__ID__", supplierId),
                type: "DELETE",
                headers: {
                    "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr(
                        "content"
                    ),
                },
                dataType: "json",
                success: function (response) {
                    if (response.status) {
                        showMessage("success", response.message);
                        loadSuppliers();
                    } else {
                        showMessage("error", response.message);
                    }
                },
                error: function (xhr) {
                    handleAjaxError(xhr);
                },
            });
        }
    });

    // Get supplier data for editing
    $(document).on("click", ".edit-supplier", function () {
        const supplierId = $(this).data("id");

        $.ajax({
            url: supplierRoutes.get.replace("__ID__", supplierId),
            type: "GET",
            dataType: "json",
            success: function (response) {
                if (response.status) {
                    const supplier = response.data;

                    // Populate form fields
                    $("#edit_supplier_id").val(supplier.id);
                    $("#edit_supplier_name").val(supplier.supplier_name);
                    $("#edit_email").val(supplier.email);
                    $("#edit_contactNumber").val(supplier.contactNumber);
                    $("#edit_supplier_type").val(supplier.supplier_type);
                    $("#edit_address").val(supplier.address);
                    $("#edit_product_offered").val(supplier.product_offered);
                    $("#edit_notes").val(supplier.notes);

                    // Show modal if it exists
                    if ($("#editSupplierModal").length) {
                        $("#editSupplierModal").modal("show");
                    }
                } else {
                    showMessage("error", response.message);
                }
            },
            error: function (xhr) {
                handleAjaxError(xhr);
            },
        });
    });

    // View supplier details
    $(document).on("click", ".view-supplier", function () {
        const supplierId = $(this).data("id");

        $.ajax({
            url: supplierRoutes.get.replace("__ID__", supplierId),
            type: "GET",
            dataType: "json",
            success: function (response) {
                if (response.status) {
                    const supplier = response.data;

                    // Update modal content
                    $("#modalSupplierName").text(supplier.supplier_name);
                    $("#modalEmail").text(supplier.email);
                    $("#modalContact").text(supplier.contactNumber);
                    $("#modalType").text(supplier.supplier_type);
                    $("#modalAddress").text(supplier.address);
                    $("#modalProducts").text(
                        supplier.product_offered || "Not specified"
                    );
                    $("#modalNotes").text(
                        supplier.notes || "No additional notes"
                    );

                    // Show modal
                    $("#supplierModal").modal("show");
                } else {
                    showMessage("error", response.message);
                }
            },
            error: function (xhr) {
                handleAjaxError(xhr);
            },
        });
    });

    // Function to load all suppliers
    function loadSuppliers() {
        $.ajax({
            url: supplierRoutes.getAll,
            type: "GET",
            dataType: "json",
            success: function (response) {
                if (response.status) {
                    populateSupplierTable(response.data);
                } else {
                    showMessage("error", response.message);
                }
            },
            error: function (xhr) {
                handleAjaxError(xhr);
            },
        });
    }

    // Function to populate supplier table
    function populateSupplierTable(suppliers) {
        const table = $("#supplierTable tbody");
        table.empty();

        if (suppliers.length === 0) {
            table.append(
                '<tr><td colspan="6" class="text-center">No suppliers found</td></tr>'
            );
            return;
        }

        suppliers.forEach((supplier, index) => {
            table.append(`
                <tr>
                    <td>${index + 1}</td>
                    <td>${supplier.supplier_name}</td>
                    <td>${supplier.email}</td>
                    <td>${supplier.contactNumber}</td>
                    <td>${supplier.supplier_type}</td>
                    <td>
                        <div class="d-flex gap-2">
                            <button class="btn btn-sm btn-success view-supplier" data-id="${
                                supplier.id
                            }">
                                 View
                            </button>
                            <button class="btn btn-sm btn-info edit-supplier" data-id="${
                                supplier.id
                            }">
                                <i class="ti tabler-edit me-1"></i> Edit
                            </button>
                            <button class="btn btn-sm btn-danger delete-supplier" data-id="${
                                supplier.id
                            }" data-name="${supplier.supplier_name}">
                                <i class="ti tabler-trash me-1"></i> Delete
                            </button>
                        </div>
                    </td>
                </tr>
            `);
        });

        // Initialize DataTable if not already initialized
        if ($.fn.DataTable.isDataTable("#supplierTable")) {
            $("#supplierTable").DataTable().destroy();
        }

        $("#supplierTable").DataTable({
            responsive: true,
            ordering: true,
            paging: true,
            language: {
                search: "",
                searchPlaceholder: "Search...",
                paginate: {
                    previous: '<i class="ti tabler-chevron-left"></i>',
                    next: '<i class="ti tabler-chevron-right"></i>',
                },
            },
        });
    }

    // Function to show success/error message
    function showMessage(type, message) {
        const alertClass =
            type === "success" ? "alert-success" : "alert-danger";

        $("#responseMessage")
            .removeClass("alert-success alert-danger")
            .addClass(alertClass)
            .html(message)
            .show();

        // Auto hide after 5 seconds
        setTimeout(() => {
            $("#responseMessage").fadeOut();
        }, 5000);
    }

    // Function to handle AJAX errors
    function handleAjaxError(xhr) {
        let errorMessage = "An error occurred while processing your request.";

        if (xhr.responseJSON && xhr.responseJSON.errors) {
            errorMessage = "<ul>";
            for (let field in xhr.responseJSON.errors) {
                errorMessage += `<li>${xhr.responseJSON.errors[field][0]}</li>`;
            }
            errorMessage += "</ul>";
        } else if (xhr.responseJSON && xhr.responseJSON.message) {
            errorMessage = xhr.responseJSON.message;
        } else if (xhr.responseJSON && xhr.responseJSON.error) {
            errorMessage = xhr.responseJSON.error;
        }

        showMessage("error", errorMessage);
    }
});
