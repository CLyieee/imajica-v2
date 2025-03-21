document.addEventListener("DOMContentLoaded", function () {
    const table = document.querySelector(".salesTable");
    const statusClasses = {
        "Pending": { title: "Pending", class: "bg-label-warning" },
        "Completed": { title: "Completed", class: "bg-label-success" },
        "Cancelled": { title: "Cancelled", class: "bg-label-danger" }
    };

    if (table) {
        new DataTable(table, {
            ajax: "/assets/sales-transaction.json", // Fetch data via AJAX
            columns: [
                { data: "transaction_id" },
                { data: "client_name" },
                { data: "service_product" },
                { data: "payment_terms_amount" },
                { data: "customer" },
                { data: "cashier" },
                { data: "amount" },
                { data: "transaction_date" },
                { data: "action" }
            ],
            columnDefs: [
                {
                    targets: 4,
                    render: (data, type, row) => `<span class="badge ${statusClasses[row.status]?.class || ''}">${statusClasses[row.status]?.title || row.status}</span>`
                },
                {
                    targets: -1,
                    title: "Actions",
                    searchable: false,
                    orderable: false,
                    render: () => `
                        <div class="d-inline-block text-nowrap">
                            <button class="btn btn-text-secondary rounded-pill waves-effect btn-icon">
                                <i class="icon-base ti tabler-edit icon-22px"></i>
                            </button>
                            <button class="btn btn-text-secondary rounded-pill waves-effect btn-icon dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                <i class="icon-base ti tabler-dots-vertical icon-22px"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end m-0">
                                <a href="#" class="dropdown-item">View</a>
                                <a href="#" class="dropdown-item">Cancel</a>
                            </div>
                        </div>`
                }
            ],
            select: { style: "multi", selector: "td:nth-child(2)" },
            order: [[1, "asc"]],
            displayLength: 7,
            language: {
                paginate: {
                    next: '<i class="icon-base ti tabler-chevron-right icon-18px"></i>',
                    previous: '<i class="icon-base ti tabler-chevron-left icon-18px"></i>'
                }
            }
        });
    }

    // Function to create a table row
    function createRow(item) {
        return `
            <tr>
                <td>${item.transaction_id}</td>
                <td>${item.client_name}</td>
                <td>${item.service_product}</td>
                <td>${item.payment_terms_amount}</td>
                <td>${item.customer}</td>
                <td>${item.cashier}</td>
                <td>${item.amount.toFixed(2)}</td>
                <td>${item.transaction_date}</td>
                <td>
                    <button class="btn btn-primary">View</button>
                    <button class="btn btn-danger">Edit</button>
                    <button class="btn btn-danger">Delete</button>
                </td>
            </tr>`;
    }

    // Fetch data and populate table
    fetch("/assets/sales-transaction.json")
        .then(response => response.json())
        .then(data => {
            const tableBody = document.getElementById("salesTableBody");
            tableBody.innerHTML = data.transactions.map(createRow).join("");
        })
        .catch(error => console.error("Error fetching JSON data:", error));
});
