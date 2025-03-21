document.addEventListener("DOMContentLoaded",function(t){let e=document.querySelector(".basic-ratings"),a=document.querySelector(".read-only-ratings"),l=document.querySelector(".custom-svg-ratings"),r=document.querySelector(".half-star-ratings"),n=document.querySelector(".onset-event-ratings"),s=document.querySelector(".onChange-event-ratings"),i=document.querySelector(".methods-ratings"),o=document.querySelector(".btn-initialize"),c=document.querySelector(".btn-destroy"),d=document.querySelector(".btn-get-rating"),g=document.querySelector(".btn-set-rating"),f=document.querySelector(".icon-star-ratings"),u=document.querySelector(".icon-star-sm-ratings"),y=document.querySelector(".icon-star-md-ratings"),b=document.querySelector(".icon-star-lg-ratings"),m=document.querySelector(".icon-star-primary-ratings"),w=document.querySelector(".icon-star-warning-ratings"),p=document.querySelector(".icon-star-success-ratings"),x=document.querySelector(".icon-star-danger-ratings");var v=parseInt(window.Helpers.getCssVar("gray-200",!0).slice(1,3),16),C=parseInt(window.Helpers.getCssVar("gray-200",!0).slice(3,5),16),O=parseInt(window.Helpers.getCssVar("gray-200",!0).slice(5,7),16),E=window.Helpers.getCssVar("gray-200",!0).replace("#","%23"),E=isRtl?`%3Cstop offset='50%25' style='stop-color:${E}' /%3E%3Cstop offset='50%25' style='stop-color:%23FFD700' /%3E`:`%3Cstop offset='50%25' style='stop-color:%23FFD700' /%3E%3Cstop offset='50%25' style='stop-color:${E}' /%3E`;let S="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'%3E%3Cpath fill='%23FFD700' d='m8.243 7.34l-6.38.925l-.113.023a1 1 0 0 0-.44 1.684l4.622 4.499l-1.09 6.355l-.013.11a1 1 0 0 0 1.464.944l5.706-3l5.693 3l.1.046a1 1 0 0 0 1.352-1.1l-1.091-6.355l4.624-4.5l.078-.085a1 1 0 0 0-.633-1.62l-6.38-.926l-2.852-5.78a1 1 0 0 0-1.794 0z'/%3E%3C/svg%3E",q=`data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'%3E%3Cdefs%3E%3ClinearGradient id='halfStarGradient'%3E${E}%3C/linearGradient%3E%3C/defs%3E%3Cpath fill='url(%23halfStarGradient)' d='m8.243 7.34l-6.38.925l-.113.023a1 1 0 0 0-.44 1.684l4.622 4.499l-1.09 6.355l-.013.11a1 1 0 0 0 1.464.944l5.706-3l5.693 3l.1.046a1 1 0 0 0 1.352-1.1l-1.091-6.355l4.624-4.5l.078-.085a1 1 0 0 0-.633-1.62l-6.38-.926l-2.852-5.78a1 1 0 0 0-1.794 0z'/%3E%3C/svg%3E`,R=`data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'%3E%3Cpath fill='rgb(${v},${C},${O})' d='m8.243 7.34l-6.38.925l-.113.023a1 1 0 0 0-.44 1.684l4.622 4.499l-1.09 6.355l-.013.11a1 1 0 0 0 1.464.944l5.706-3l5.693 3l.1.046a1 1 0 0 0 1.352-1.1l-1.091-6.355l4.624-4.5l.078-.085a1 1 0 0 0-.633-1.62l-6.38-.926l-2.852-5.78a1 1 0 0 0-1.794 0z'/%3E%3C/svg%3E`;e&&new Raty(e,{starOn:S,starHalf:q,starOff:R}).init(),a&&new Raty(a,{number:5,starOn:S,starHalf:q,starOff:R}).init();if(l&&new Raty(l,{starOn:"data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'%3E%3Cpath fill='%23FFD700' d='m6.516 14.323l-1.49 6.452a.998.998 0 0 0 1.529 1.057L12 18.202l5.445 3.63a1.001 1.001 0 0 0 1.517-1.106l-1.829-6.4l4.536-4.082a1 1 0 0 0-.59-1.74l-5.701-.454l-2.467-5.461a.998.998 0 0 0-1.822 0L8.622 8.05l-5.701.453a1 1 0 0 0-.619 1.713zm2.853-4.326a1 1 0 0 0 .832-.586L12 5.43l1.799 3.981a1 1 0 0 0 .832.586l3.972.315l-3.271 2.944c-.284.256-.397.65-.293 1.018l1.253 4.385l-3.736-2.491a.995.995 0 0 0-1.109 0l-3.904 2.603l1.05-4.546a1 1 0 0 0-.276-.94l-3.038-2.962z'/%3E%3C/svg%3E",starOff:`data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'%3E%3Cpath fill='rgb(${v},${C},${O})' d='m6.516 14.323l-1.49 6.452a.998.998 0 0 0 1.529 1.057L12 18.202l5.445 3.63a1.001 1.001 0 0 0 1.517-1.106l-1.829-6.4l4.536-4.082a1 1 0 0 0-.59-1.74l-5.701-.454l-2.467-5.461a.998.998 0 0 0-1.822 0L8.622 8.05l-5.701.453a1 1 0 0 0-.619 1.713zm2.853-4.326a1 1 0 0 0 .832-.586L12 5.43l1.799 3.981a1 1 0 0 0 .832.586l3.972.315l-3.271 2.944c-.284.256-.397.65-.293 1.018l1.253 4.385l-3.736-2.491a.995.995 0 0 0-1.109 0l-3.904 2.603l1.05-4.546a1 1 0 0 0-.276-.94l-3.038-2.962z'/%3E%3C/svg%3E`}).init(),r&&new Raty(r,{starOn:S,starHalf:q,starOff:R,rtl:isRtl}).init(),n&&new Raty(n,{starOn:S,starHalf:q,starOff:R,click:function(t){alert("The rating is set to "+t+" !")}}).init(),s){let a=new Raty(s,{starOn:S,starHalf:q,starOff:R,half:!0,mouseover:function(t){var e=s.parentElement.querySelector(".counter");e&&(e.textContent=(Math.round(2*t)/2).toFixed(1))},mouseout:function(){var t,e=s.parentElement.querySelector(".counter");e&&(t=a.score()||0,e.textContent=(Math.round(2*t)/2).toFixed(1))}});E=s.parentElement.querySelector(".counter");E&&(E.textContent="0.0"),a.init()}let h=0,F=null;function L(t=h){F||(F=new Raty(i,{starOn:S,starHalf:q,starOff:R,click:function(t){h=t},score:t,readOnly:!1,rtl:isRtl})).init()}function z(){F?(i.innerHTML="",F=null,h=0):alert("Please Initialize Ratings First")}L(h),o&&o.addEventListener("click",()=>L(h)),c&&c.addEventListener("click",z),d&&d.addEventListener("click",function(){F?alert("Current Ratings are "+h):alert("Please Initialize Ratings First")}),g&&g.addEventListener("click",()=>{var t;t=1,F?(z(),L(t),h=t):alert("Please Initialize Ratings First")}),f&&new Raty(f,{starType:"i",starOff:"icon-base icon-xl ti tabler-heart-filled bg-danger-subtle",starOn:"icon-base icon-xl ti tabler-heart-filled text-danger"}).init(),u&&new Raty(u,{starType:"i",starOff:"icon-base ti tabler-star-filled bg-secondary-subtle",starOn:"icon-base ti tabler-star-filled text-secondary"}).init(),y&&new Raty(y,{starType:"i",starOff:"icon-base icon-xl ti tabler-star-filled bg-secondary-subtle",starOn:"icon-base icon-xl ti tabler-star-filled text-secondary"}).init(),b&&new Raty(b,{starType:"i",starOff:"icon-base icon-42px ti tabler-star-filled bg-secondary-subtle",starOn:"icon-base icon-42px ti tabler-star-filled text-secondary"}).init(),m&&new Raty(m,{starType:"i",starOff:"icon-base icon-xl ti tabler-star-filled bg-primary-subtle",starOn:"icon-base icon-xl ti tabler-star-filled text-primary"}).init(),w&&new Raty(w,{starType:"i",starOff:"icon-base icon-xl ti tabler-star-filled bg-warning-subtle",starOn:"icon-base icon-xl ti tabler-star-filled text-warning"}).init(),p&&new Raty(p,{starType:"i",starOff:"icon-base icon-xl ti tabler-star-filled bg-success-subtle",starOn:"icon-base icon-xl ti tabler-star-filled text-success"}).init(),x&&new Raty(x,{starType:"i",starOff:"icon-base icon-xl ti tabler-star-filled bg-danger-subtle",starOn:"icon-base icon-xl ti tabler-star-filled text-danger"}).init()});