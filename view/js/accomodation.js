var accomodationRecords = $('#accomodationListing').DataTable({
	"lengthChange": false,
	"processing":true,
	"serverSide":true,		
	"bFilter": true,
	'serverMethod': 'post',		
	"order":[],
	"ajax":{
		url:"accomodation_action.php",
		type:"POST",
		data:{action:'listAccomodation'},
		dataType:"json"
	},
	"columnDefs":[
		{
			"targets":[0, 3, 4],
			"orderable":false,
		},
	],
	"pageLength": 10
});	