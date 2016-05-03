/**
 * Created by Administrator on 2016/4/21 0021.
 */

 function fna(){
    var dis1=document.getElementById("dis1");
    var dis2=document.getElementById("dis2");
    var mains_div=document.getElementsByClassName("mains_div");
    var strip_1=document.getElementsByClassName("strip_1");
    strip_1[1].style.backgroundColor="red";
    mains_div[1].style.color="red";
    dis1.style.display="none";
    dis2.style.display="block";
}

function fnb(){
    var dis1=document.getElementById("dis1");
    var dis2=document.getElementById("dis2");
    var dis3=document.getElementById("dis3");
    var mains_div=document.getElementsByClassName("mains_div");
    var strip_1=document.getElementsByClassName("strip_1");
    strip_1[2].style.backgroundColor="red";
    mains_div[2].style.color="red";
    dis1.style.display="none";
    dis2.style.display="none";
    dis3.style.display="block";
}