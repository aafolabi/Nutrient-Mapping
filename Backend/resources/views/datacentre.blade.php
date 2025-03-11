@extends('layouts.landing')
@section('content')

    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.2.1/dist/chart.umd.min.js"></script>
    <!-- Main Section Start -->
    <section class="w-full py-12">
        <div class="w-5/6 mx-auto">
            <div class="text-center text-[#002411]">
                <h1 class="text-4xl font-bold">Data Center</h1>
                <p class="pt-6 text-xl font-normal">
                    Accurate nutrition data, supporting agribusiness projects
                </p>
            </div>
            <div
                class="mt-10 w-full lg:h-72 py-8 lg:py-0 bg-white overflow-visible"
            >
                <div

                    class="flex flex-col lg:flex-row lg:space-y-0 space-y-4 justify-between items-center h-full px-12"
                >
                    <div class="">
                        <p for="country" class="text-xl text-[#002411] font-normal">
                            Select Country
                        </p>

                        <select
                            name="country"
                            placeholder="Select Country"
                            id="country"
                            class="h-14 w-56 rounded-lg bg-gray-50 border mt-4 text-xl text-[#012411] font-normal pl-6"
                        >
                            <option disabled selected>Select Country</option>
                            @foreach($countries as $country)
                                <option value="{{$country->id}}">{{$country->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="">
                        <p for="country" class="text-xl text-[#002411] font-normal">
                            Select State/Region
                        </p>

                        <select
                            name="state"
                            placeholder="Select State/Region"
                            id="state-dd"
                            class="h-14 w-56 rounded-lg bg-gray-50 border mt-4 text-xl text-[#012411] font-normal pl-6"
                        >
                            <option disabled selected>Select State/Region</option>

                        </select>
                    </div>
                    <div class="">
                        <p for="country" class="text-xl text-[#002411] font-normal">
                            Select Crop
                        </p>

                        <select
                            name="crop"
                            placeholder="Select Crop"
                            id="crop"
                            class="h-14 w-56 rounded-lg bg-gray-50 border mt-4 text-xl text-[#012411] font-normal pl-6"
                        >
                            <option disabled selected>Select Crop</option>
                            @foreach($crops as $crop)
                                <option value="{{$crop->id}}">{{$crop->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="">
                        <button
{{--                            type="submit"--}}
                            id="processButton"
                            class="w-40 bg-opacity-80 mt-10 h-14 bg-[#0bac56] text-white font-bold text-sm rounded-lg"
                        >
                            Submit
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div id="dataView">
            <div class="w-5/6 mx-auto bg-white py-8 lg:py-0 mt-8">
            <div
                class="flex flex-col lg:flex-row justify-start lg:gap-20 gap-10 items-center h-full px-12"
            >
                <div class="mt-10">
                    <p for="country" class="text-xl text-[#002411] font-normal">
                        Select Category
                    </p>

                    <select
                        name="category"
                        placeholder="Select Category"
                        id="category"
                        class="h-14 w-56 rounded-lg bg-gray-50 border mt-4 text-xl text-[#012411] font-normal pl-6"
                    >
                    </select>
                </div>
                <div class="mt-10">
                    <p for="country" class="text-xl text-[#002411] font-normal">
                        Select Chart Type
                    </p>

                    <select
                        name="chart-type"
{{--                        placeholder="Select Country"--}}
                        id="chart-type"
                        class="h-14 w-56 rounded-lg bg-gray-50 border mt-4 text-xl text-[#012411] font-normal pl-6"
                    >
                        <option value="bar">Bar Chart</option>
                        {{--                                        <option value="horizontalBar">Horizontal Bar Chart</option>--}}
                        <option value="line">Line Chart</option>
                        <option value="pie">Pie Chart</option>
                        <option value="doughnut">Doughnut Chart</option>
                    </select>
                </div>
                <div class=""><span id="desc"></span></div>
{{--                    Description--}}

            </div>
                <div class="bg-white h-120 w-9/12 mx-auto mt-4"  id="chartDiv">
{{--                    Chart--}}
                    <canvas id="chartCont"></canvas>
                </div>
        </div>
        </div>
    </section>
    <!-- Main Section Ends -->

    <script>
        $("#dataView").hide();
        var categories;
        var chartdata;

        $(document).ready(function () {
            $('#country').on('change', function () {
                var idCountry = this.value;
                // $("#state-dd").html('');
                $.ajax({
                    url: "{{url('api/fetch-states')}}",
                    type: "POST",
                    data: {
                        country_id: idCountry,
                        _token: '{{csrf_token()}}'
                    },
                    dataType: 'json',
                    success: function (result) {
                        $('#state-dd').html('<option value="">Select State</option>');
                        for(i =0; i<result.length; i++) {
                            value = result[i];
                            $("#state-dd").append('<option value="' + value
                                .id + '">' + value.name + '</option>');
                        }
                    }
                });
            });

            $('#category').on('change', function () {
                renderChart(this.value);
            });

            $('#chart-type').on('change', function () {
                renderChart($('#category').val());
            });

            $("#processButton").click(function(){
                var country = $('#country').val();
                var state = $('#state-dd').val();
                var crop = $('#crop').val();
                if(country == null || state == null || crop == null){
                    Swal.fire({
                        title : 'Error!',
                        text : 'Please select Country, State, & Crop',
                        icon : 'info',
                        confirmButtonColor : '#66BB6A',
                    })
                }
                else{
                    $.ajax({
                        url: "{{url('api/fetch-nutrition-data')}}",
                        type: "POST",
                        data: {
                            country: country,
                            eco_region: state,
                            crop: crop,
                            _token: '{{csrf_token()}}'
                        },
                        dataType: 'json',
                        success: function (result) {
                            categories = result.categories;
                            chartdata = result.values;
                            // console.log(chartdata);
                            if(chartdata.length > 0) {
                                $("#category").html('');
                                for (i = 0; i < categories.length; i++) {
                                    $("#category").append('<option value="' + i + '">' + categories[i] + '</option>');
                                }
                                $("#dataView").show();
                                renderChart(0);
                            }
                            else{
                                Swal.fire({
                                    title: 'Error!',
                                    text: 'There are no records for your selections',
                                    icon: 'info',
                                    confirmButtonColor: '#66BB6A',
                                })
                            }
                        }
                    });
                }
            });

        });

        function typeWriter(txt){
            var i = 0;
            if (i < txt.length) {
                document.getElementById("desc").innerHTML += txt.charAt(i);
                i++;
                setTimeout(typeWriter, 50);
            }
        }

        var myChart = null;
        function renderChart(dataIndex) {
            $('#desc').text(chartdata[dataIndex][6]);
            var type = $('#chart-type').val()
            if(myChart !== null){
                myChart.clear();
                myChart.destroy();
            }
            if(["bar","line","scatter","horizontalBar"].includes(type)) {
                // Bar chart
                myChart = new Chart(document.getElementById("chartCont"), {
                    type: type != "horizontalBar" ? type : "bar",
                    data: {
                        labels: ["Fibre(%)", "Protein(%)", "Fat(%)", "Iron(mg/kg)", "Carbohydrate(%)"],
                        datasets: [
                            {
                                label: '',
                                data: [chartdata[dataIndex][0],chartdata[dataIndex][1],chartdata[dataIndex][2],0,0],
                                borderWidth: 1,
                                backgroundColor: '#66BB6A',
                                borderColor: 'green',
                                yAxisID: 'A',
                                grid: {
                                    drawOnChartArea: false, // only want the grid lines for one axis to show up
                                },
                            },
                            {
                                yAxisID: 'B',
                                label: '',
                                data: [0,0,0,chartdata[dataIndex][3],chartdata[dataIndex][4]],
                                backgroundColor: '#F55767',
                                borderColor: 'red'
                            }
                            // {
                            //     label: "",
                            //     backgroundColor: ["#3e95cd", "#8e5ea2", "#3cba9f", "#e8c3b9", "#c45850"],
                            //     data: chartdata[dataIndex]
                            // }
                        ]
                    },
                    options: {
                        indexAxis: type == "horizontalBar" ? 'y' : 'x',
                        // responsive: true,
                        scales: {
                            A: {
                                type: 'linear',
                                position: 'left',
                                ticks: { beginAtZero: true, color: '#66BB6A', min:0, max:15 },
                                grid: { display: false },

                            },
                            B: {
                                type: 'linear',
                                position: 'right',
                                ticks: { beginAtZero: true, color: '#F55767', min:0 , max:500 },
                                grid: { display: false }
                            },
                            x: { ticks: { beginAtZero: true } }
                        },
                        legend: {display: false},
                        title: {
                            display: true,
                            text: 'Nutrition Components per Crop'
                        },
                    }
                });
            }
            else if(["pie","doughnut"].includes(type)){
                myChart = new Chart(document.getElementById("chartCont"), {
                    type: type,
                    data: {
                        labels: ["Fibre", "Protein", "Fat", "Iron", "Carbohydrate"],
                        datasets: [{
                            label: "",
                            backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#c45850"],
                            data: chartdata[dataIndex]
                        }]
                    },
                    options: {
                        // responsive: true,
                        title: {
                            display: true,
                            text: 'Nutrition Components per Crop'
                        }
                    }
                });
            }
        }
    </script>
@stop


