(window["webpackJsonp"]=window["webpackJsonp"]||[]).push([["email"],{"4fdd":function(e,t,n){"use strict";n.r(t);n("ddb0");var a=n("5c40"),s=n("830f"),o=n("9ff4");const c=Object(a["I"])("data-v-0c7c3d56");Object(a["w"])("data-v-0c7c3d56");const i={class:"email"},l={class:"email-content"},r={class:"email-form"},u={class:"email-input email-form-name"},m={class:"email-label"},h=Object(a["k"])("div",null,[Object(a["j"])("*"),Object(a["k"])("em",null,"姓名: ")],-1),b={class:"email-input email-form-phone"},p={class:"email-label"},d=Object(a["k"])("div",null,[Object(a["j"])("*"),Object(a["k"])("em",null,"电话: ")],-1),y={class:"email-input email-form-company"},j={class:"email-label"},O=Object(a["k"])("div",null,[Object(a["j"])("*"),Object(a["k"])("em",null,"公司: ")],-1),f={class:"email-form-word"},k=Object(a["k"])("div",null,[Object(a["k"])("em",null,"留言: ")],-1),w=Object(a["k"])("span",null,"提交",-1);Object(a["u"])();const V=c((function(e,t){return Object(a["t"])(),Object(a["e"])("div",i,[Object(a["k"])("div",l,[Object(a["k"])("div",r,[Object(a["k"])("div",u,[Object(a["k"])("div",m,[h,Object(a["H"])(Object(a["k"])("input",{type:"text","onUpdate:modelValue":t[1]||(t[1]=t=>e.userName=t),placeholder:"请输入姓名",onBlur:t[2]||(t[2]=(...t)=>e.nameBlur(...t))},null,544),[[s["b"],e.userName]])]),Object(a["H"])(Object(a["k"])("span",null,Object(o["F"])(e.nameText),513),[[s["c"],e.warnName]])]),Object(a["k"])("div",b,[Object(a["k"])("div",p,[d,Object(a["H"])(Object(a["k"])("input",{type:"number","onUpdate:modelValue":t[3]||(t[3]=t=>e.userPhone=t),placeholder:"请输入手机号",onBlur:t[4]||(t[4]=(...t)=>e.phoneBlur(...t))},null,544),[[s["b"],e.userPhone]])]),Object(a["H"])(Object(a["k"])("span",null,Object(o["F"])(e.phoneText),513),[[s["c"],e.warnPhone]])]),Object(a["k"])("div",y,[Object(a["k"])("div",j,[O,Object(a["H"])(Object(a["k"])("input",{type:"text","onUpdate:modelValue":t[5]||(t[5]=t=>e.userCompany=t),placeholder:"请输入公司名称",onBlur:t[6]||(t[6]=(...t)=>e.companyBlur(...t))},null,544),[[s["b"],e.userCompany]])]),Object(a["H"])(Object(a["k"])("span",null,Object(o["F"])(e.companyText),513),[[s["c"],e.warnCompany]])]),Object(a["k"])("div",f,[k,Object(a["H"])(Object(a["k"])("textarea",{"onUpdate:modelValue":t[7]||(t[7]=t=>e.userWord=t),rows:"4",cols:"20",placeholder:"请输入留言"},null,512),[[s["b"],e.userWord]])]),Object(a["k"])("div",{class:"email-form-btn",style:e.btnStatus?"":"opacity: 0.48;",onClick:t[8]||(t[8]=(...t)=>e.onSubmit(...t))},[w],4)])])])}));n("2532");var v=n("292d"),S={name:"Email",data(){return{userName:null,nameVerify:!1,warnName:!1,nameText:"请输入姓名",userPhone:null,phoneVerify:!1,warnPhone:!1,phoneText:"请输入手机号",userCompany:null,companyVerify:!1,warnCompany:!1,companyText:"请输入公司名称",userWord:null,btnStatus:!1}},watch:{userName:{handler:function(){this.userName&&this.userName.length>=2?this.nameVerify=!0:(this.nameVerify=!1,this.userName?this.nameText="请输入正确姓名":this.nameText="请输入姓名"),this.onBtnStatus()}},userPhone:{handler:function(){let e=/(1[3-9]\d{9}$)/;this.userPhone&&e.test(this.userPhone)?this.phoneVerify=!0:(this.phoneVerify=!1,this.userPhone?this.phoneText="请输入正确手机号":this.phoneText="请输入手机号"),this.onBtnStatus()}},userCompany:{handler:function(){this.userCompany&&this.userCompany.length>=6?this.companyVerify=!0:(this.companyVerify=!1,this.userCompany?this.companyText="请输入正确公司名称":this.companyText="请输入公司名称"),this.onBtnStatus()}}},mounted(){this.$nextTick(()=>{document.body.style.display="block"})},methods:{nameBlur(){this.nameVerify?this.warnName=!1:this.warnName=!0},phoneBlur(){this.phoneVerify?this.warnPhone=!1:this.warnPhone=!0},companyBlur(){this.companyVerify?this.warnCompany=!1:this.warnCompany=!0},onBtnStatus(){this.nameVerify&&this.phoneVerify&&this.companyVerify?this.btnStatus=!0:this.btnStatus=!1},onSubmit(){let e=this;e.nameVerify&&e.phoneVerify&&e.companyVerify&&e.btnStatus&&(e.btnStatus=!1,Object(v["a"])({method:"POST",url:"/api/send",load:"预约中..",params:{source:location.href,name:e.userName,phone:e.userPhone,company:e.userCompany,word:e.userWord}}).then(t=>{t.status?(Object(v["c"])(t.message),location.href.includes("https://mdqygl.cn")||(e.$store.commit("setStateGiftbag",!1),e.$store.commit("setStateGiftSend",!0))):Object(v["c"])(t.message),e.btnStatus=!0}).catch(t=>{console.log(t),e.btnStatus=!0}))}}};n("cb7a");S.render=V,S.__scopeId="data-v-0c7c3d56";t["default"]=S},8953:function(e,t,n){},cb7a:function(e,t,n){"use strict";n("8953")}}]);