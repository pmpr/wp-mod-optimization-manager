(()=>{"use strict";var t={n:e=>{var a=e&&e.__esModule?()=>e.default:()=>e;return t.d(a,{a}),a},d:(e,a)=>{for(var r in a)t.o(a,r)&&!t.o(e,r)&&Object.defineProperty(e,r,{enumerable:!0,get:a[r]})},o:(t,e)=>Object.prototype.hasOwnProperty.call(t,e)};const e=jQuery;var a=t.n(e);a()(document).ready((function(){const t=a()('[name="start_budget_date"]');PMPRTrigger.addFilter("can_go_to_next_step",((e,a,r)=>{let s=!1,i=e;if(!0===e){switch(r){case 3:if(PMPRUtil.isEmpty(t))s="start_date_require";else{let e=t.val();if(PMPRUtil.isEmpty(e)||!PMPRUtil.isDate(e))s="start_date_not_valid";else{let t=new Date;t.setHours(0,0,0,0),PMPRUtil.isDatePassed(new Date(e),t)&&(s="start_date_passed")}}}s?(a.messageContainer.attr("data-type","warning"),i=PMPRUtil.getSettingByPath(`errors.${s}`)):i=e}return i}),0)}))})();