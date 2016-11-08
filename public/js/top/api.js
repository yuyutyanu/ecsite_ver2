(function(){
    var vm = new Vue({
      el: 'body',
      data: {
        items:[]
      }
    });

      $.get("/top_getitems",function(data){
        console.log(data);
        vm.$set('items',data);
      });
}());
