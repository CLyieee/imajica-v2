document.addEventListener("DOMContentLoaded",function(e){{let t=document.querySelector(".credit-card-mask-edit"),r=document.querySelector(".expiry-date-mask-edit"),n=document.querySelector(".cvv-code-mask-edit");t&&(t.addEventListener("input",e=>{t.value=formatCreditCard(e.target.value);e=e.target.value.replace(/\D/g,""),e=getCreditCardType(e);document.querySelector(".card-type-edit").innerHTML=e&&"unknown"!==e&&"general"!==e?`<img src="${assetsPath}img/icons/payments/${e}-cc.png" height="28"/>`:""}),registerCursorTracker({input:t,delimiter:" "})),r&&(r.addEventListener("input",e=>{r.value=formatDate(e.target.value,{delimiter:"/",datePattern:["m","y"]})}),registerCursorTracker({input:r,delimiter:"/"})),n&&n.addEventListener("input",e=>{e=e.target.value.replace(/\D/g,"");n.value=formatNumeral(e,{numeral:!0,numeralPositiveOnly:!0})}),FormValidation.formValidation(document.getElementById("editCCForm"),{fields:{modalEditCard:{validators:{notEmpty:{message:"Please enter your credit card number"}}}},plugins:{trigger:new FormValidation.plugins.Trigger,bootstrap5:new FormValidation.plugins.Bootstrap5({eleValidClass:"",rowSelector:".form-control-validation"}),submitButton:new FormValidation.plugins.SubmitButton,autoFocus:new FormValidation.plugins.AutoFocus},init:e=>{e.on("plugins.message.placed",function(e){e.element.parentElement.classList.contains("input-group")&&e.element.parentElement.insertAdjacentElement("afterend",e.messageElement)})}})}});