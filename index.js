// onclick="tbox()" が押されたら
    function tbox(){

       // <form name="pwform">内の <input name="txtb">　の値を取得
       var str = document.pwform.txtb.value;

       // もし　<input name="txtb">　の値が半角英数字以外だったら、アラートを出す
       if( /\W+/g.test(str) ) {
          alert("半角英数字のみを入力して下さい。");
       }

       // もし　<input name="txtb">　の値に何かしら入っていたら、入力値.htmlに移動する
       else if( str != null ) {
            location.href = str + ".html";
       }

    }

    // onclick="clr()" が押されたら、フォームの値を消す
    function clr(){
      document.pwform.txtb.value="";
    }
