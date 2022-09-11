@extends("layouts.process")
@section("title")
<title>ACCOUNT - INFO</title>
@endsection


@section("content")
<section class="section who-we-are">
    <div class="container">
        <form action="{{route('step1Post')}}" method="post">
            @csrf
            <div class="row">
                <div class="col-lg-7">
                    <div class="section-title mb-0 pb-2">
                        <p class="text-muted mx-auto mb-0">Step 1</p>
                    </div>
                    <div class="">
                        <h2 class="fs-5 mb-4">Hi {{auth()->user()->name}} — Tell Us About Yourself...</h2>
                    </div>

                    @if (Session::has('message'))
                    <ul class="text-danger">
                        <li>{{Session::get('message')}}</li>
                    </ul>
                    @endif

                    <div class="form-group my-3">
                        <div class="row align-items-center">
                            <div class="col-md-4">
                                How should we address you ?
                            </div>

                            <div class="col-md-8">
                                <select name="gender" id="" class="form-select w-100">
                                    <option value="">Please Select</option>
                                    <option value="Male">Mr</option>
                                    <option value="Female">Mrs./Miss</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group my-3">
                        <div class="row align-items-center">
                            <div class="col-md-4">
                                Mobile :
                            </div>

                            <div class="col-md-8">
                                <input type="text" name="mobile" id="" class="form-control" placeholder="Telephone">
                            </div>
                        </div>
                    </div>


                    <div class="form-group my-3">
                        <div class="row align-items-center">
                            <div class="col-md-4">
                                Date of Birth :
                            </div>

                            <div class="col-md-8">
                                <input type="date" name="dob" id="" class="form-control" placeholder="DOB">
                            </div>
                        </div>
                    </div>

                    <div class="form-group my-3">
                        <div class="row align-items-center">
                            <div class="col-md-4">
                                Location :
                            </div>

                            <div class="col-md-8">
                                <select name="location" id="" class="form-select w-100">
                                    <option value="">Please Select</option>
                                    <option value="Avon">Avon</option>
                                    <option value="Bedfordshire">Bedfordshire</option>
                                    <option value="Berkshire">Berkshire</option>
                                    <option value="Bristol">Bristol</option>
                                    <option value="Buckinghamshire">Buckinghamshire</option>
                                    <option value="Cambridgeshire">Cambridgeshire</option>
                                    <option value="Cheshire">Cheshire</option>
                                    <option value="Cleveland">Cleveland</option>
                                    <option value="Cornwall">Cornwall</option>
                                    <option value="Cumbria">Cumbria</option>
                                    <option value="Derbyshire">Derbyshire</option>
                                    <option value="Devon">Devon</option>
                                    <option value="Dorset">Dorset</option>
                                    <option value="Durham">Durham</option>
                                    <option value="East Riding of Yorkshire">East Riding of Yorkshire</option>
                                    <option value="East Sussex">East Sussex</option>
                                    <option value="Essex">Essex</option>
                                    <option value="Gloucestershire">Gloucestershire</option>
                                    <option value="Greater Manchester">Greater Manchester</option>
                                    <option value="Hampshire">Hampshire</option>
                                    <option value="Herefordshire">Herefordshire</option>
                                    <option value="Hertfordshire">Hertfordshire</option>
                                    <option value="Humberside">Humberside</option>
                                    <option value="Isle of Wight">Isle of Wight</option>
                                    <option value="Isles of Scilly">Isles of Scilly</option>
                                    <option value="Kent">Kent</option>
                                    <option value="Lancashire">Lancashire</option>
                                    <option value="Leicestershire">Leicestershire</option>
                                    <option value="Lincolnshire">Lincolnshire</option>
                                    <option value="London">London</option>
                                    <option value="Merseyside">Merseyside</option>
                                    <option value="Middlesex">Middlesex</option>
                                    <option value="Norfolk">Norfolk</option>
                                    <option value="North Yorkshire">North Yorkshire</option>
                                    <option value="Northamptonshire">Northamptonshire</option>
                                    <option value="Northumberland">Northumberland</option>
                                    <option value="Nottinghamshire">Nottinghamshire</option>
                                    <option value="Oxfordshire">Oxfordshire</option>
                                    <option value="Rutland">Rutland</option>
                                    <option value="Shropshire">Shropshire</option>
                                    <option value="Somerset">Somerset</option>
                                    <option value="South Yorkshire">South Yorkshire</option>
                                    <option value="Staffordshire">Staffordshire</option>
                                    <option value="Suffolk">Suffolk</option>
                                    <option value="Surrey">Surrey</option>
                                    <option value="Tyne and Wear">Tyne and Wear</option>
                                    <option value="Warwickshire">Warwickshire</option>
                                    <option value="West Midlands">West Midlands</option>
                                    <option value="West Sussex">West Sussex</option>
                                    <option value="West Yorkshire">West Yorkshire</option>
                                    <option value="Wiltshire">Wiltshire</option>
                                    <option value="Worcestershire">Worcestershire</option>

                                    <option value="Channel Islands">Channel Islands</option>
                                    <option value="Isle of Man">Isle of Man</option>
                                    <option value="Antrim">Antrim</option>
                                    <option value="Armagh">Armagh</option>
                                    <option value="Down">Down</option>
                                    <option value="Fermanagh">Fermanagh</option>
                                    <option value="Londonderry">Londonderry</option>
                                    <option value="Tyrone">Tyrone</option>
                                    <option value="Aberdeen City">Aberdeen City</option>
                                    <option value="Aberdeenshire">Aberdeenshire</option>
                                    <option value="Angus">Angus</option>
                                    <option value="Argyll and Bute">Argyll and Bute</option>
                                    <option value="Borders">Borders</option>
                                    <option value="Clackmannan">Clackmannan</option>
                                    <option value="Dumfries and Galloway">Dumfries and Galloway</option>
                                    <option value="Dundee (City of)">Dundee (City of)</option>
                                    <option value="East Ayrshire">East Ayrshire</option>
                                    <option value="East Dunbartonshire">East Dunbartonshire</option>
                                    <option value="East Lothian">East Lothian</option>
                                    <option value="East Renfrewshire">East Renfrewshire</option>
                                    <option value="Edinburgh (City of)">Edinburgh (City of)</option>
                                    <option value="Falkirk">Falkirk</option>
                                    <option value="Fife">Fife</option>
                                    <option value="Glasgow (City of)">Glasgow (City of)</option>
                                    <option value="Highland">Highland</option>
                                    <option value="Inverclyde">Inverclyde</option>
                                    <option value="Midlothian">Midlothian</option>
                                    <option value="Moray">Moray</option>
                                    <option value="North Ayrshire">North Ayrshire</option>
                                    <option value="North Lanarkshire">North Lanarkshire</option>
                                    <option value="Orkney">Orkney</option>
                                    <option value="Perthshire and Kinross">Perthshire and Kinross</option>
                                    <option value="Renfrewshire">Renfrewshire</option>
                                    <option value="Shetland">Shetland</option>
                                    <option value="South Ayrshire">South Ayrshire</option>
                                    <option value="South Lanarkshire">South Lanarkshire</option>
                                    <option value="Stirling">Stirling</option>
                                    <option value="West Dunbartonshire">West Dunbartonshire</option>
                                    <option value="West Lothian">West Lothian</option>
                                    <option value="Western Isles">Western Isles</option>
                                    <option value="Blaenau Gwent">Blaenau Gwent</option>
                                    <option value="Bridgend">Bridgend</option>
                                    <option value="Caerphilly">Caerphilly</option>
                                    <option value="Cardiff">Cardiff</option>
                                    <option value="Carmarthenshire">Carmarthenshire</option>
                                    <option value="Ceredigion">Ceredigion</option>
                                    <option value="Conwy">Conwy</option>
                                    <option value="Denbighshire">Denbighshire</option>
                                    <option value="Flintshire">Flintshire</option>
                                    <option value="Gwynedd">Gwynedd</option>
                                    <option value="Isle of Anglesey">Isle of Anglesey</option>
                                    <option value="Merthyr Tydfil">Merthyr Tydfil</option>
                                    <option value="Monmouthshire">Monmouthshire</option>
                                    <option value="Neath Port Talbot">Neath Port Talbot</option>
                                    <option value="Newport">Newport</option>
                                    <option value="Pembrokeshire">Pembrokeshire</option>
                                    <option value="Powys">Powys</option>
                                    <option value="Rhondda Cynon Taff">Rhondda Cynon Taff</option>
                                    <option value="Swansea">Swansea</option>
                                    <option value="Torfaen">Torfaen</option>
                                    <option value="The Vale of Glamorgan">The Vale of Glamorgan</option>
                                    <option value="Wrexham">Wrexham</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="form-group my-3">
                        <div class="row align-items-center">
                            <div class="col-md-4">
                                Willing to relocate ?
                            </div>

                            <div class="col-md-8">
                                <select name="toRelocate" id="" class="form-select w-100">
                                    <option value="">Please Select</option>
                                    <option value="Yes">Yes</option>
                                    <option selected value="No">No</option>
                                </select>
                            </div>
                        </div>
                    </div>



                    <hr class="my-3">

                    <div class="form-group my-3">
                        <div class="row align-items-center">
                            <div class="col-md-4">
                                Primary Job Interest :
                            </div>

                            <div class="col-md-8">
                                <select name="primary_id" id="" class="form-select w-100">
                                    <option value="">Please Select</option>
                                    @foreach ($jobs as $job)
                                    <option value="{{$job->id}}">{{$job->title}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="form-group my-3">
                        <div class="row align-items-center">
                            <div class="col-md-4">
                                How many years of working experience do you have in this field ?
                            </div>

                            <div class="col-md-8">
                                <select name="primaryExperience" id="" class="form-select w-100">
                                    <option value="">Please Select</option>
                                    <option value="1-2years">1-2years</option>
                                    <option value="3-5years">3-5years</option>
                                    <option value="5-10years">5-10years</option>
                                    <option value="More than 10years">More than 10years</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <hr class="my-3">

                    <div class="form-group my-3">
                        <div class="row align-items-center">
                            <div class="col-md-4">
                                Secondary Job Interest :
                            </div>

                            <div class="col-md-8">
                                <select name="secondary_id" id="" class="form-select w-100">
                                    <option value="">Please Select</option>
                                    @foreach ($jobs as $job)
                                    <option value="{{$job->id}}">{{$job->title}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>



                    <div class="form-group my-3">
                        <div class="row align-items-center">
                            <div class="col-md-4">
                                How many years of working experience do you have in this field?
                            </div>

                            <div class="col-md-8">
                                <select name="secondaryExperience" id="" class="form-select w-100">
                                    <option value="">Please Select</option>
                                    <option value="1-2years">1-2years</option>
                                    <option value="3-5years">3-5years</option>
                                    <option value="5-10years">5-10years</option>
                                    <option value="More than 10years">More than 10years</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <hr class="my-3">

                    <div class="form-group my-3">
                        <div class="row align-items-center">
                            <div class="col-md-4">
                                How did you hear about us?
                            </div>

                            <div class="col-md-8">
                                <select name="hearaboutus" id="" class="form-select w-100">
                                    <option value="">Please Select</option>
                                    <option value="Facebook">Facebook</option>
                                    <option value="Twitter">Twitter</option>
                                    <option value="Youtube">Youtube</option>
                                    <option value="Others">Others</option>
                                </select>
                            </div>
                        </div>
                    </div>


                    <div class="form-group my-5">
                        <button class="btn btn-primary">Save & Continue</button>
                    </div>

                </div>
                <!--end col-->

                <div class="col-lg-5">

                </div>

            </div>
            <!--end row-->
        </form>
    </div>
    <!--end container-->
</section>

@endSection