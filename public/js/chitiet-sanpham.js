
new Vue({
	el:'#numbers',
	data:{
		dem : 0,
	},
	methods:{
		giam:function(){
			this.dem--;
		},
		tang:function(){
			this.dem++;
		}
	}
})
new Vue({
	el:'#menu3',
	methods:{
		thanks: function(){
			alert:"Cám ơn ý kiến góp ý của bạn !!!";
		}
	}
})