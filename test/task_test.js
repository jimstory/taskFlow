(function(){

QUnit.test("array max", function(assert) {
   var tmp = new Array(1,12,4,124,8,99998,456);
   var tmp1 = new Array(1,12,4,124.45,8,99998,-456,"k");
   var tmp3 = new Array();
   assert.equal(99998,arrMax(tmp), "max vaulue should is 99998!" );
   assert.equal(undefined,arrMax(tmp3), "should return undefined!" );
});


})();