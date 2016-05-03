window.onload = function() {
    var nav = document.getElementById("nav");
    var left = document.getElementById("left");
    var right = document.getElementById("right");
    var inner = document.getElementById("inner");
    var inner1 = document.getElementById("inner1");
    var inner2 = document.getElementById("inner2");
    var inner3 = document.getElementById("inner3");
    var content = document.getElementById("innercontent");
    var content1 = document.getElementById("innercontent1");
    var content2 = document.getElementById("innercontent2");
    var content3 = document.getElementById("innercontent3");
    var prev = document.getElementById("prev");
    var next = document.getElementById("next");
    var header = document.getElementById("header").getElementsByTagName("span");
    var scroll = document.getElementById("scroll");
    var photo = document.getElementById("photo");
    var bo = document.getElementById("bo");
    var to = document.getElementById("to");
    var photo1 = document.getElementById("photo1");

    var timers;
    var index;
    var timmer;
    var animated=false;
    clearTimeout(timmer);
    function showSpan( ){
        for(i=0;i<header.length;i++){
            if(header[i].className=="on"){header[i].className="";
            break;}
        }
        header[index-1].className="on";
    }
    function animate(offset){
        animated=true;
        //var time = 1000;
        var interval = 10;
        var speed = (offset-content.offsetLeft)/interval;
        var newleft = parseInt(content.style.left) + offset;
        function go(){
            if((speed>0&&newleft>parseInt(content.style.left))||(speed<0&&newleft<parseInt(content.style.left))){
                content.style.left=parseInt(content.style.left)+speed+"px";
                setTimeout(go,100);
            }
            else{animated=false;
                content.style.left = newleft+"px";
                if(newleft>-300){content.style.left = -2100+"px";}
                if(newleft<-2100){content.style.left= -300+"px";}}}
        go();}
    function fn_a(offset){
        animated=true;
        var time = 500;
        var interval = 10;
        var speed = offset/(time/interval);
        var newleft1 = parseInt(content1.style.left) + offset;
        function go1(){
            if((speed>0&&newleft1>parseInt(content1.style.left))||(speed<0&&newleft1<parseInt(content1.style.left))){
                content1.style.left=parseInt(content1.style.left)+speed+"px";
                setTimeout(go1,interval);}
            else{animated=false;
                content1.style.left = newleft1+"px";
                if(newleft1>-200){content1.style.left = -1400+"px";}
                if(newleft1<-1400){content1.style.left= -200+"px";}}}
        go1();}
    function fn_b(offset){
        animated=true;
        var time = 500;
        var interval = 10;
        var speed = offset/(time/interval);
        var newleft2 = parseInt(content2.style.left) + offset;
        function go2(){
            if((speed>0&&newleft2>parseInt(content2.style.left))||(speed<0&&newleft2<parseInt(content2.style.left))){
                content2.style.left=parseInt(content2.style.left)+speed+"px";
                setTimeout(go2,interval);}
            else{animated=false;
                content2.style.left = newleft2+"px";
                if(newleft2>-500){content2.style.left = -3500+"px";}
                if(newleft2<-3500){content2.style.left= -500+"px";}}}
        go2();}
    function fn_c(offset){
        animated=true;
        var time = 500;
        var interval = 10;
        var speed = offset/(time/interval);
        var newleft3 = parseInt(content3.style.left) + offset;
        function go3(){
            if((speed>0&&newleft3>parseInt(content3.style.left))||(speed<0&&newleft3<parseInt(content3.style.left))){
                content3.style.left=parseInt(content3.style.left)+speed+"px";
                setTimeout(go3,interval);}
            else{animated=false;
                content3.style.left = newleft3+"px";
                if(newleft3>-300){content3.style.left = -2100+"px";}
                if(newleft3<-2100){content3.style.left= -300+"px";}}}
        go3();}
    prev.onclick = function(){
        if(!animated){
        animate(300);
        fn_a(200);
        fn_b(500);
        fn_c(300);}
    }
    next.onclick = function(){
        if(!animated){
        animate(-300);
        fn_a(-200);
        fn_b(-500);
        fn_c(-300);}
    }
    mn.onclick=function(){fn_cw(600,500,200,500,200,100,280,200,200,200,50,200,200,400,-180,200,200,250,-180,180);
        fn_border(100,100,0,100,100,100,100,0,0,100,100,100,100,0,100,100);
        nav.style.backgroundColor="pink";
        nav.style.borderBottomLeftRadius=250+"px";
        nav.style.borderBottomRightRadius=150+"px";
        nav.style.borderTopLeftRadius=150+"px";
        nav.style.borderTopRightRadius=250+"px";
        index=2
        showSpan();
    }
    cw.onclick=function() {fn_cw(600,500,200,500,200,100,0,500,200,500,0,500,200,400,-500,500,200,0,0,0);
        fn_border(0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0);
        nav.style.borderBottomLeftRadius=0+"px";
        nav.style.borderBottomRightRadius=0+"px";
        nav.style.borderTopLeftRadius=0+"px";
        nav.style.borderTopRightRadius=0+"px";
        nav.style.backgroundColor="#pink";
        index=1;
    showSpan();}
    fj.onclick=function(){fn_cw(600,500,200,500,200,100,150,200,200,200,150,200,200,400,-50,200,200,150,0,0);
        fn_border(100,100,100,100,100,100,100,100,100,100,100,100,100,100,100,100,100);
        nav.style.backgroundColor="#FF530B";
        nav.style.opacity="0.8";
        nav.style.borderRadius=250+"px";
        index=3;
        showSpan();
    }
    jz.onclick=function(){fn_cw(600,500,200,500,200,100,200,230,200,230,250,230,200,400,-100,230,200,20,0,0);
        fn_border(0,50,50,50,0,0,0,0,0,0,0,0,50,50,50,0);
        nav.style.borderBottomLeftRadius=0+"px";
        nav.style.borderBottomRightRadius=250+"px";
        nav.style.borderTopLeftRadius=250+"px";
        nav.style.borderTopRightRadius=0+"px";
        nav.style.backgroundColor="#FFDB9A";
        index=4;
        showSpan();
    }
    xk.onclick=function(){fn_cw(500,500,300,500,200,0,0,200,300,200,0,300,500,0,0,500,300,0,0,0);
        fn_border(20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20);index=5;
        showSpan();
    }
    function fn_cw(cwa,cwb,cwc,cwd,cwe,cwf,cwy,cwg,cwh,cwj,cwin,cwk,cwl,cwm,cwn,cwo,cwp,cwpri,cwt,innerl){
        left.style.width=cwa+"px";
        left.style.height=cwb+"px";
        right.style.width=cwc+"px";
        right.style.height=cwd+"px";
        inner1.style.width=cwe+"px";
        inner1.style.right=cwf+"px";
        inner1.style.top=cwy+"px";
        inner1.style.height=cwg+"px";
        inner.style.width=cwh+"px";
        inner.style.height=cwj+"px";
        inner.style.top=cwin+"px";
        inner2.style.height=cwk+"px";
        inner2.style.width=cwl+"px";
        inner2.style.left=cwm+"px";
        inner2.style.top=cwn+"px";
        inner3.style.height=cwo+"px";
        inner3.style.width=cwp+"px";
        inner3.style.top=cwpri+"px";
        inner3.style.left=cwt+"px";
        inner.style.left=innerl+"px";

    }
    function fn_border(a,b,c,d,e,f,g,h,j,k,l,m,n,o,p,q){
        inner.style.borderBottomLeftRadius=a+"px";
        inner1.style.borderBottomLeftRadius=b+"px";
        inner2.style.borderBottomLeftRadius=c+"px";
        inner3.style.borderBottomLeftRadius=d+"px";
        inner.style.borderTopLeftRadius=e+"px";
        inner1.style.borderTopLeftRadius=f+"px";
        inner2.style.borderTopLeftRadius=g+"px";
        inner3.style.borderTopLeftRadius=h+"px";
        inner.style.borderBottomRightRadius=j+"px";
        inner1.style.borderBottomRightRadius=k+"px";
        inner2.style.borderBottomRightRadius=l+"px";
        inner3.style.borderBottomRightRadius=m+"px";
        inner.style.borderTopRightRadius=n+"px";
        inner1.style.borderTopRightRadius=o+"px";
        inner2.style.borderTopRightRadius=p+"px";
        inner3.style.borderTopRightRadius=q+"px";
    }
    function animatess(offsets){
        newtop = parseInt(photo.style.top)+offsets;
        photo.style.top=newtop+"px";
        if(newtop>-400){photo.style.top=-1800+"px";
        }
        if(newtop<-1800){photo.style.top=-400+"px";
        }
        function goes(){
            time=1000;
            inter=10;
            speeds=offsets/(time/inter);
            if((speeds>0&&newtop>parseInt(photo.style.top))||(speeds<0&&newtop<parseInt(photo.style.top))){
                photo.style.top=parseInt(photo.style.top)+speeds+"px";
            }
        }
    }
        to.onclick=function(){animatess(80);}
        bo.onclick=function(){animatess(-80);}


}/**
 * Created by Administrator on 2016/4/20 0020.
 */
