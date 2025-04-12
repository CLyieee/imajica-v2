document.addEventListener("DOMContentLoaded",function(e){
  config.colors.borderColor,config.colors.bodyBg,config.colors.headingColor;
  let t=document.querySelector(".datatables-products"),
  o={
    1:{title:"Scheduled",class:"bg-label-warning"},
    2:{title:"Published",class:"bg-label-success"},
    3:{title:"Inactive",class:"bg-label-danger"}
  },
  r={
    0:{title:"Out_of_Stock"},
    1:{title:"In_Stock"}
  };

t&&new DataTable(t,{
  ajax: {
    url: '/api/products',
    method: 'GET',
    dataSrc: function(json) {
      // Store categories globally for filter
      window.productCategories = json.categories;
      return json.data;
    }
  },
  columns:[
    {data:"id"},
    {data:"id",orderable:!1,render:DataTable.render.select()},
    {data:"name"},
    {data:"category"},
    {data:"stock_status"},
    {data:"sku"},
    {data:"base_price"},
    {data:"quantity"},
    {data:"status"},
    {data:"actions"}
  ],
  columnDefs:[
    {
      className:"control",
      searchable:!1,
      orderable:!1,
      responsivePriority:2,
      targets:0,
      render:function(e,t,n,a){return""}
    },
    {
      targets:1,
      orderable:!1,
      searchable:!1,
      responsivePriority:3,
      checkboxes:!0,
      checkboxes:{selectAllRender:'<input type="checkbox" class="form-check-input">'},
      render:function(){return'<input type="checkbox" class="dt-checkboxes form-check-input">'}
    },
    {
      targets: 2,
      responsivePriority: 1,
      render: function(e, t, n, a) {
        return `
          <div class="d-flex justify-content-start align-items-center product-name">
            <div class="avatar-wrapper">
              <div class="avatar avatar me-2 me-sm-4 rounded-2 bg-label-secondary">
                ${n.product_image ? 
                  `<img src="/${n.product_image}" class="rounded">` :
                  `<span class="avatar-initial rounded-2 bg-label-${['success','danger','warning','info','dark','primary','secondary'][Math.floor(6*Math.random())]}">${(n.name.match(/\b\w/g)||[]).slice(0,2).join("").toUpperCase()}</span>`
                }
              </div>
            </div>
            <div class="d-flex flex-column">
              <h6 class="text-nowrap mb-0">${n.name}</h6>
              <small class="text-truncate d-none d-sm-block">${n.description || ''}</small>
            </div>
          </div>
        `;
      }
    },
    {
      targets:3,
      responsivePriority:5,
      render:function(e,t,n,a){
        return n.category;
      }
    },
    {
      targets:4,
      orderable:!1,
      responsivePriority:3,
      render:function(e,t,n,a){
        n=r[n.stock_status]?.title || n.stock_status;
        return"display"===t?`
          <span class="text-truncate">
            ${{Out_of_Stock:`
            <label class="switch switch-primary switch-sm">
            <input type="checkbox" class="switch-input" id="switch">
              <span class="switch-toggle-slider">
                <span class="switch-off"></span>
              </span>
            </label>`,In_Stock:`
            <label class="switch switch-primary switch-sm">
              <input type="checkbox" class="switch-input" checked>
              <span class="switch-toggle-slider">
                <span class="switch-on"></span>
              </span>
            </label>`}[n]}
            <span class="d-none">${n}</span>
          </span>`:n
      }
    },
    {
      targets:5,
      render:function(e,t,n,a){return"<span>"+n.sku+"</span>"}
    },
    {
      targets:6,
      render:function(e,t,n,a){return"<span>"+n.base_price+"</span>"}
    },
    {
      targets:7,
      responsivePriority:4,
      render:function(e,t,n,a){return"<span>"+n.quantity+"</span>"}
    },
    {
      targets:-2,
      render:function(e,t,n,a){
        n=n.status;
        return'<span class="badge '+o[n]?.class+'" text-capitalized>'+o[n]?.title+"</span>"
      }
    },
    {
      targets:-1,
      title:"Actions",
      searchable:!1,
      orderable:!1,
      render:function(e,t,n,a){
        return `
          <div class='d-flex gap-1'>

            <a href="/products/${n.id}/edit" class='btn btn-info'><i class='ti tabler-edit me-1'></i>Edit</a>
            <button class='btn btn-danger delete-product' data-id='${n.id}'><i class='ti tabler-trash me-1'></i>Delete</button>
          </div>
        `;
      }
    }
  ],
  select:{
    style:"multi",
    selector:"td:nth-child(2)"
  },
  order:[2,"asc"],
  displayLength:7,
  layout:{
    topStart:{
      rowClass:"card-header d-flex border-top rounded-0 flex-wrap py-0 flex-column flex-md-row align-items-start",
      features:[{search:{className:"me-5 ms-n4 pe-5 mb-n6 mb-md-0",placeholder:"Search Product",text:"_INPUT_"}}]
    },
    topEnd:{
      rowClass:"row m-3 my-0 justify-content-between",
      features:[{pageLength:{menu:[7,10,25,50,100],text:"_MENU_"},buttons:[{extend:"collection",className:"btn btn-label-secondary dropdown-toggle me-4",text:'<span class="d-flex align-items-center gap-1"><i class="icon-base ti tabler-upload icon-xs"></i> <span class="d-none d-sm-inline-block">Export</span></span>',buttons:[{extend:"print",text:'<span class="d-flex align-items-center"><i class="icon-base ti tabler-printer me-1"></i>Print</span>',className:"dropdown-item",exportOptions:{columns:[3,4,5,6,7],format:{body:function(e,t,n){if(e.length<=0||!(-1<e.indexOf("<")))return e;{e=(new DOMParser).parseFromString(e,"text/html");let t="";var a=e.querySelectorAll(".product-name");return 0<a.length?a.forEach(e=>{e=e.querySelector(".fw-medium")?.textContent||e.querySelector(".d-block")?.textContent||e.textContent;t+=e.trim()+" "}):t=e.body.textContent||e.body.innerText,t.trim()}}}},customize:function(e){e.document.body.style.color=config.colors.headingColor,e.document.body.style.borderColor=config.colors.borderColor,e.document.body.style.backgroundColor=config.colors.bodyBg;e=e.document.body.querySelector("table");e.classList.add("compact"),e.style.color="inherit",e.style.borderColor="inherit",e.style.backgroundColor="inherit"}},{extend:"csv",text:'<span class="d-flex align-items-center"><i class="icon-base ti tabler-file me-1"></i>Csv</span>',className:"dropdown-item",exportOptions:{columns:[3,4,5,6,7],format:{body:function(e,t,n){if(e.length<=0)return e;e=(new DOMParser).parseFromString(e,"text/html");let a="";var o=e.querySelectorAll(".product-name");return 0<o.length?o.forEach(e=>{e=e.querySelector(".fw-medium")?.textContent||e.querySelector(".d-block")?.textContent||e.textContent;a+=e.trim()+" "}):a=e.body.textContent||e.body.innerText,a.trim()}}}},{extend:"excel",text:'<span class="d-flex align-items-center"><i class="icon-base ti tabler-upload me-1"></i>Excel</span>',className:"dropdown-item",exportOptions:{columns:[3,4,5,6,7],format:{body:function(e,t,n){if(e.length<=0)return e;e=(new DOMParser).parseFromString(e,"text/html");let a="";var o=e.querySelectorAll(".product-name");return 0<o.length?o.forEach(e=>{e=e.querySelector(".fw-medium")?.textContent||e.querySelector(".d-block")?.textContent||e.textContent;a+=e.trim()+" "}):a=e.body.textContent||e.body.innerText,a.trim()}}}},{extend:"pdf",text:'<span class="d-flex align-items-center"><i class="icon-base ti tabler-file-text me-1"></i>Pdf</span>',className:"dropdown-item",exportOptions:{columns:[3,4,5,6,7],format:{body:function(e,t,n){if(e.length<=0)return e;e=(new DOMParser).parseFromString(e,"text/html");let a="";var o=e.querySelectorAll(".product-name");return 0<o.length?o.forEach(e=>{e=e.querySelector(".fw-medium")?.textContent||e.querySelector(".d-block")?.textContent||e.textContent;a+=e.trim()+" "}):a=e.body.textContent||e.body.innerText,a.trim()}}}},{extend:"copy",text:'<i class="icon-base ti tabler-copy me-1"></i>Copy',className:"dropdown-item",exportOptions:{columns:[3,4,5,6,7],format:{body:function(e,t,n){if(e.length<=0)return e;e=(new DOMParser).parseFromString(e,"text/html");let a="";var o=e.querySelectorAll(".product-name");return 0<o.length?o.forEach(e=>{e=e.querySelector(".fw-medium")?.textContent||e.querySelector(".d-block")?.textContent||e.textContent;a+=e.trim()+" "}):a=e.body.textContent||e.body.innerText,a.trim()}}}}]},{text:'<i class="icon-base ti tabler-plus me-0 me-sm-1 icon-16px"></i><span class="d-none d-sm-inline-block">Add Product</span>',className:"add-new btn btn-primary",action:function(){window.location.href="/add-product"}}]}]},
    bottomStart:{rowClass:"row mx-3 justify-content-between",features:["info"]},
    bottomEnd:"paging"
  },
  language:{
    paginate:{
      next:'<i class="icon-base ti tabler-chevron-right scaleX-n1-rtl icon-18px"></i>',
      previous:'<i class="icon-base ti tabler-chevron-left scaleX-n1-rtl icon-18px"></i>',
      first:'<i class="icon-base ti tabler-chevrons-left scaleX-n1-rtl icon-18px"></i>',
      last:'<i class="icon-base ti tabler-chevrons-right scaleX-n1-rtl icon-18px"></i>'
    }
  },
  responsive:{
    details:{
      display:DataTable.Responsive.display.modal({header:function(e){return"Details of "+e.data().name}}),
      type:"column",
      renderer:function(e,t,n){
        var a,o,s,n=n.map(function(e){
          return""!==e.title?`<tr data-dt-row="${e.rowIndex}" data-dt-column="${e.columnIndex}">
            <td>${e.title}:</td>
            <td>${e.data}</td>
          </tr>`:""
        }).join("");
        return!!n&&((a=document.createElement("div")).classList.add("table-responsive"),o=document.createElement("table"),a.appendChild(o),o.classList.add("table"),(s=document.createElement("tbody")).innerHTML=n,o.appendChild(s),a)
      }
    }
  },
  initComplete:function(){
    var e=this.api();
    e.columns(-2).every(function(){
      let t=this,n=document.createElement("select");
      n.id="ProductStatus",n.className="form-select text-capitalize",n.innerHTML='<option value="">Status</option>';
      document.querySelector(".product_status").appendChild(n);
      
      // Add all possible status options rather than just the ones in use
      Object.values(o).forEach(status => {
        let option = document.createElement("option");
        option.value = status.title;
        option.textContent = status.title;
        n.appendChild(option);
      });

      n.addEventListener("change",function(){
        var e=n.value?`^${n.value}$`:"";
        t.search(e,!0,!1).draw()
      });
    }),
    
    e.columns(3).every(function(){
      let t=this,n=document.createElement("select");
      n.id="ProductCategory";
      n.className="form-select text-capitalize";
      n.innerHTML='<option value="">Category</option>';
      document.querySelector(".product_category").appendChild(n);
      
      // Use categories from API response
      if(window.productCategories) {
        window.productCategories.forEach(category => {
          let option = document.createElement("option");
          option.value = category;
          option.textContent = category;
          n.appendChild(option);
        });
      }

      n.addEventListener("change",function(){
        var e=n.value ? n.value : "";
        t.search(e,true,false).draw()
      });
    }),
    
    e.columns(4).every(function(){
      let t=this,n=document.createElement("select");
      n.id="ProductStock",n.className="form-select text-capitalize",n.innerHTML='<option value="">Stock</option>';
      document.querySelector(".product_stock").appendChild(n);
      
      // Add all possible stock options rather than just the ones in use
      Object.values(r).forEach(stock => {
        let option = document.createElement("option");
        option.value = stock.title;
        option.textContent = stock.title.replace('_', ' ');
        n.appendChild(option);
      });

      n.addEventListener("change",function(){
        var e=n.value?`^${n.value}$`:"";
        t.search(e,!0,!1).draw()
      });
    })
  }
}),
setTimeout(()=>{
  [{selector:".dt-buttons .btn",classToRemove:"btn-secondary"},
  {selector:".dt-buttons.btn-group",classToAdd:"mb-md-0 mb-6"},
  {selector:".dt-search .form-control",classToRemove:"form-control-sm",classToAdd:"ms-0"},
  {selector:".dt-search",classToAdd:"mb-0 mb-md-6"},
  {selector:".dt-length .form-select",classToRemove:"form-select-sm"},
  {selector:".dt-layout-end",classToAdd:"gap-md-2 gap-0 mt-0"},
  {selector:".dt-layout-start",classToAdd:"mt-0"},
  {selector:".dt-layout-table",classToRemove:"row mt-2"},
  {selector:".dt-layout-full",classToRemove:"col-md col-12",classToAdd:"table-responsive"}]
  .forEach(({selector:e,classToRemove:n,classToAdd:a})=>{
    document.querySelectorAll(e).forEach(t=>{
      n&&n.split(" ").forEach(e=>t.classList.remove(e)),
      a&&a.split(" ").forEach(e=>t.classList.add(e))
    })
  })
},100);

// Add event handler for delete button
$(document).on('click', '.delete-product', function() {
  const productId = $(this).data('id');
  if(confirm('Are you sure you want to delete this product?')) {
    $.ajax({
      url: `/api/products/${productId}`,
      method: 'DELETE',
      success: function() {
        // Reload the DataTable
        $('.datatables-products').DataTable().ajax.reload();
      },
      error: function(xhr) {
        alert('Error deleting product');
      }
    });
  }
});
});