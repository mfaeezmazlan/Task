function getCurrentDate(){
	var currentdate = new Date();
	var datetime = "\nLast Sync: " + currentdate.getDay() + "/"+currentdate.getMonth() 
	+ "/" + currentdate.getFullYear() + " @ " 
	+ currentdate.getHours() + ":" 
	+ currentdate.getMinutes() + ":" + currentdate.getSeconds();

	return datetime;
}


function loadlink(){
    $('#tableToRefresh').load('viewRecord.php',function () {
         // $(this).unwrap();
         console.log("Successfully refresh view"+ getCurrentDate());
    });
}

loadlink();
// setInterval(function(){
//     loadlink()
// }, 5000);

function editRecord(id){
	var inNamePos = $("#tRow_"+id+" td:nth-child(2)"); 
	var inDetailPos = $("#tRow_"+id+" td:nth-child(3)"); 
	var tempName = inNamePos.text();
	var tempDetails = inDetailPos.text();

	$("#inEditID").val(id);
	$("#inEditName").val(tempName);
	$("#inEditDetails").val(tempDetails);
}

function deleteRecord(id){
	$.post("delRec.php",{id: id},function(data){
		console.log(data);
		loadlink();
	})
}

$("#btnSave").click(function(){
	var name = $("#inName").val();
	var detail = $("#inDetails").val();
	var startDate = $("#inStartDate").val();
	var endDate = $("#inEndDate").val();
	$.post("saveRec.php",{inName: name, inDetail: detail, inStartDate: startDate, inEndDate: endDate}, function(data){
		console.log(data);
		$("#inName").val(null);
		$("#inDetails").val(null);
		$("#inStartDate").val(null);
		$("#inEndDate").val(null);
		loadlink();
	});
});


$("#btnUpdateSave").click(function(){
	var editId = $("#inEditID").val();
	var editName = $("#inEditName").val();
	var editDetail = $("#inEditDetails").val();
	$.post("updateRec.php",{id: editId, editName: editName, editDetail: editDetail}, function(data){
		console.log(data);
		$("#inName").val("");
		$("#inDetails").val("");
		loadlink();
		$("#editModal").modal("hide");
	});
});
