// Call the dataTables jQuery plugin
$(document).ready(function () {
	$("#gbr").DataTable();
});

$(document).ready(function () {
	$("#glm").DataTable();
});

$(document).ready(function () {
	$("#bio").DataTable();
});

$(document).ready(function () {
	$("#sis").DataTable();
});

$(document).ready(function () {
	$("#gbr1").DataTable({
		paging: true,
    searching: true,
		ordering: false,
		info: false,
		bPaginate: false,
		bSortable: false,
		bLengthChange: false,
		bFilter: false,
		bInfo: false,
		bAutoWidth: false,
    "pagingType": "numbers",
		language: {
			searchPlaceholder: "Search name room",
			search: "",
		},
	});
});
$(document).ready(function () {
	$("#glm1").DataTable({
		paging: true,
    searching: true,
		ordering: false,
		info: false,
		bPaginate: false,
		bSortable: false,
		bLengthChange: false,
		bFilter: false,
		bInfo: false,
		bAutoWidth: false,
    "pagingType": "numbers",
		language: {
			searchPlaceholder: "Search name room",
			search: "",
		},
	});
});
$(document).ready(function () {
	$("#bio1").DataTable({
		paging: true,
    searching: true,
		ordering: false,
		info: false,
		bPaginate: false,
		bSortable: false,
		bLengthChange: false,
		bFilter: false,
		bInfo: false,
		bAutoWidth: false,
    "pagingType": "numbers",
		language: {
			searchPlaceholder: "Search name room",
			search: "",
		},
	});
});
$(document).ready(function () {
	$("#sis1").DataTable({
		paging: true,
    searching: true,
		ordering: false,
		info: false,
		bPaginate: false,
		bSortable: false,
		bLengthChange: false,
		bFilter: false,
		bInfo: false,
		bAutoWidth: false,
    "pagingType": "numbers",
		language: {
			searchPlaceholder: "Search name room",
			search: "",
		},
	});
});
