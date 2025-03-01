var options = {
	chart: {
		height: 230,
		type: "area",
		toolbar: {
			show: false,
		},
	},
	dataLabels: {
		enabled: false,
	},
	stroke: {
		curve: "smooth",
		width: 1,
	},
	series: [
		{
			name: "Visitors",
			data: [100, 500, 300, 400, 500, 400, 600],
		},
	],
	grid: {
		borderColor: "#dae1ea",
		strokeDashArray: 5,
		xaxis: {
			lines: {
				show: true,
			},
		},
		yaxis: {
			lines: {
				show: false,
			},
		},
		padding: {
			top: 0,
			right: 0,
			bottom: 10,
			left: 0,
		},
	},
	xaxis: {
		type: "day",
		categories: ["1", "2", "3", "4", "5", "6", "7"],
	},
	yaxis: {
		labels: {
			show: false,
		},
	},
	colors: ["#e4052e", "#0073d8"],
	fill: {
		type: "gradient",
		gradient: {
			shadeIntensity: 1,
			opacityFrom: 0.4,
			opacityTo: 0.2,
			stops: [0, 90, 100],
		},
	},
};

var chart = new ApexCharts(document.querySelector("#visitors"), options);

chart.render();
