@extends('template.mainTemplate')

@section('content')

    <div class="row py-4">
        <div class="col-sm-12">
            <h1>Zoekt u contactinformatie?</h1>
        </div>
        <div class="col-sm-12">
            <p>Klik op de naam van wie u de informatie wil zien.</p>
        </div>
        <div class="col-sm-12 border">

            <!--Accordion wrapper-->
            <div class="accordion md-accordion" id="accordionEx" role="tablist" aria-multiselectable="true">

                <!-- Accordion card -->
                <div class="card">

                    <!-- Card header -->
                    <div class="card-header" role="tab" id="headingOne1">
                        <a data-toggle="collapse" data-parent="#accordionEx" href="#collapseOne1" aria-expanded="true"
                           aria-controls="collapseOne1">
                            <h5 class="mb-0">
                                Bestuurlid 1<i class="fas fa-angle-down rotate-icon"></i>
                            </h5>
                        </a>
                    </div>

                    <!-- Card body -->
                    <div id="collapseOne1" class="collapse show" role="tabpanel" aria-labelledby="headingOne1"
                         data-parent="#accordionEx">
                        <div class="card-body">
                            Telefoon: 0612345678
                            Email: placeholder@yeet.com
                        </div>
                    </div>

                </div>
                <!-- Accordion card -->

                <!-- Accordion card -->
                <div class="card">

                    <!-- Card header -->
                    <div class="card-header" role="tab" id="headingTwo2">
                        <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseTwo2"
                           aria-expanded="false" aria-controls="collapseTwo2">
                            <h5 class="mb-0">
                                Bestuurlid 2 <i class="fas fa-angle-down rotate-icon"></i>
                            </h5>
                        </a>
                    </div>

                    <!-- Card body -->
                    <div id="collapseTwo2" class="collapse" role="tabpanel" aria-labelledby="headingTwo2"
                         data-parent="#accordionEx">
                        <div class="card-body">
                            Telefoon: 0612345678
                            Email: placeholder@yeet.com
                        </div>
                    </div>

                </div>
                <!-- Accordion card -->

                <!-- Accordion card -->
                <div class="card">

                    <!-- Card header -->
                    <div class="card-header" role="tab" id="headingThree3">
                        <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseThree3"
                           aria-expanded="false" aria-controls="collapseThree3">
                            <h5 class="mb-0">
                                Bestuurlid 3<i class="fas fa-angle-down rotate-icon"></i>
                            </h5>
                        </a>
                    </div>

                    <!-- Card body -->
                    <div id="collapseThree3" class="collapse" role="tabpanel" aria-labelledby="headingThree3"
                         data-parent="#accordionEx">
                        <div class="card-body">
                            Telefoon: 0612345678
                            Email: placeholder@yeet.com
                        </div>
                    </div>

                </div>
                <!-- Accordion card -->

            </div>
            <!-- Accordion wrapper -->
        </div>
    </div>

    <div class="row py-4">
        <div class="col-sm-12">
            <h1>Heeft u nog vragen?</h1>
        </div>
        <div class="col-sm-12">
            <p>Stel ze hier! u kunt binnen 1-2 dagen een reactie verwachten in uw email.</p>
        </div>
        <div class="col-sm-12 p-3 border">
            <form class="w-100" method="POST" action="/contact">
                @csrf
                <div class="form-group w-50">
                    <label for="email">Email address:</label>
                    <input type="email" name="email" class="form-control" placeholder="Enter email" id="email">
                </div>
                <div class="form-group">
                    <label for="comment">Uw vraag:</label>
                    <textarea class="form-control" name="qcontent" rows="5" id="qcontent"></textarea>
                </div>

                <div class="form-group">
                    <select class="form-control" name="questionTo">
                        @foreach($users as $user)
                            <option value="{{$user->id}}">{{$user->username}}</option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>

@endsection
