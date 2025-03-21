document.addEventListener("DOMContentLoaded",function(e){var t,a,r=document.querySelector(".datatables-order-details");r&&((t=document.createElement("h5")).classList.add("card-title","mb-0"),t.innerHTML="Order details",(a=document.createElement("h6")).classList.add("m-0"),a.innerHTML='<a href=" javascript:void(0)">Edit</a>',new DataTable(r,{
    data: [
        { id: 1, product_name: "Product A", product_info: "Description A", price: 10.00, qty: 2, image: "amazon-echo.png" },
        { id: 2, product_name: "Product B", product_info: "Description B", price: 15.00, qty: 1, image: "apple-watch.png" },
        { id: 3, product_name: "Product C", product_info: "Description C", price: 20.00, qty: 3, image: "headphones.png" }
    ],
    columns:[
        {data:"id"},
        {data:"id",orderable:!1,render:DataTable.render.select()},
        {data:"product_name"},
        {data:"price"},
        {data:"qty"},
        {data:"id"}],
        
        columnDefs:[{className:"control",searchable:!1,orderable:!1,responsivePriority:2,targets:0,render:function(e,t,a,r){return""}},{targets:1,orderable:!1,searchable:!1,responsivePriority:3,checkboxes:!0,checkboxes:{selectAllRender:'<input type="checkbox" class="form-check-input">'},render:function(){return'<input type="checkbox" class="dt-checkboxes form-check-input">'}},{targets:2,responsivePriority:1,searchable:!1,orderable:!1,render:function(e,t,a,r){var s=a.product_name,n=a.product_info,a=a.image;let o;return`
        <div class="d-flex justify-content-start align-items-center text-nowrap">
          <div class="avatar-wrapper">
            <div class="avatar avatar-sm me-3">${o=a?`
          <img src="${assetsPath}img/products/${a}" lass="rounded-2">
        `:`<span class="avatar-initial rounded-2 bg-label-${["success","danger","warning","info","dark","primary","secondary"][Math.floor(6*Math.random())]}">${(s.match(/\b\w/g)||[]).slice(0,2).join("").toUpperCase()}</span>`}</div>
          </div>
          <div class="d-flex flex-column">
            <h6 class="text-body mb-0">${s}</h6>
            <small>${n}</small>
          </div>
        </div>`}},{targets:3,searchable:!1,orderable:!1,render:function(e,t,a,r){return"<span>$"+a.price+"</span>"}},{targets:4,searchable:!1,orderable:!1,render:function(e,t,a,r){return'<span class="text-body">'+a.qty+"</span>"}},{targets:5,searchable:!1,orderable:!1,render:function(e,t,a,r){return'<span class="text-body">'+a.qty*a.price+"</span>"}}],order:[2,""],layout:{topStart:{rowClass:"row card-header border-bottom mx-0 px-3",features:[t]},topEnd:{features:[a]},bottomStart:{rowClass:"mt-0",features:[]},bottomEnd:{}},responsive:{details:{display:DataTable.Responsive.display.modal({header:function(e){return"Details of "+e.data().product_name}}),type:"column",renderer:function(e,t,a){var r,s,n,a=a.map(function(e){return""!==e.title?`<tr data-dt-row="${e.rowIndex}" data-dt-column="${e.columnIndex}">
            <td>${e.title}:</td>
            <td>${e.data}</td>
          </tr>`:""}).join("");return!!a&&((r=document.createElement("div")).classList.add("table-responsive"),s=document.createElement("table"),r.appendChild(s),s.classList.add("table"),(n=document.createElement("tbody")).innerHTML=a,s.appendChild(n),r)}}}})),setTimeout(()=>{[{selector:".dt-layout-table",classToRemove:"row mt-2"},{selector:".dt-layout-full",classToRemove:"col-md col-12",classToAdd:"table-responsive"}].forEach(({selector:e,classToRemove:a,classToAdd:r})=>{document.querySelectorAll(e).forEach(t=>{a.split(" ").forEach(e=>t.classList.remove(e)),r&&t.classList.add(r)})})},100)}),(()=>{var e=document.querySelector(".delete-order");e&&(e.onclick=function(){Swal.fire({title:"Are you sure?",text:"You won't be able to revert order!",icon:"warning",showCancelButton:!0,confirmButtonText:"Yes, Delete order!",customClass:{confirmButton:"btn btn-primary me-2 waves-effect waves-light",cancelButton:"btn btn-label-secondary waves-effect waves-light"},buttonsStyling:!1}).then(function(e){e.value?Swal.fire({icon:"success",title:"Deleted!",text:"Order has been removed.",customClass:{confirmButton:"btn btn-success waves-effect waves-light"}}):e.dismiss===Swal.DismissReason.cancel&&Swal.fire({title:"Cancelled",text:"Cancelled Delete :)",icon:"error",customClass:{confirmButton:"btn btn-success waves-effect waves-light"}})})}),e=(new Date).getFullYear(),document.getElementById("orderYear").innerHTML=e});