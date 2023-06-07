@extends('themes.layouts.template')

@section('content')
    <style>
        .txt_red {
            color: red;
        }
        .mt_10 {
            margin-top: 9px;
        }
        #sinistreForm label.error {
            /*width: auto;
            display: inline-block;*/
            color: red;
            font-size: 13.5px;
        }
        .ctn_notifi {
            position: relative;
            border-radius: 6px;
            background-color: #f4a5a5c2;
            padding: 10px 7px;
            padding-right: 22px;
        }

        .ctn_notifi .txt_notifi{
            color: #f70505;
        }
        .remove_btn_notifi {
            position: absolute;
            right: 4px;
            top: 3px;
        }
        .ctn_notifi .remove_btn_notifi i {
            padding: 4px 6px;
            background-color: white;
            color: black;
            border-radius: 50%;
        }
        .cl_blue {
            color: blue;
        }
        .text_cu_pc {
            font-size: 13px;
            line-height: 1.3;
        }
    </style>
    <!--star tdreamit Area-->
    <!--==================================================-->
    <!--==================================================-->
    <!--Start dreamit contact Area-->
    <!--==================================================-->
    <div class="contact_area style-three pt-90 pb-85">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="dreamit-section-title style-two pb-30">
                        <div class="dreamit-section-main-title pb-30">
                            <h2> Tableau de bord </h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="mb-50">
                        <h5> Les sinistres </h5>
                    </div>

                </div>
                <div class="col-lg-3 col-md-4">
                    <div class="dreamit-contact-content d-flex">
                        <div class="contact-icon">
                            <img src="{{$public}}assets/images/icons8-damage-64blue.png" alt="">
                        </div>
                        <div class="contact-title ml-15">
                            <h3>Tous</h3>
                            <div class="contact-content-text">
                                <h5>{{$sinistretous}} </h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4">
                    <div class="dreamit-contact-content d-flex">
                        <div class="contact-icon">
                            <img src="{{$public}}assets/images/icons8-damage-64green.png" alt="">
                        </div>
                        <div class="contact-title ml-15">
                            <h3>AUJOURD'HUI</h3>
                            <div class="contact-content-text">
                                <h5> {{$sinistreOfToday}} </h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4">
                    <div class="dreamit-contact-content d-flex">
                        <div class="contact-icon">
                            <img src="{{$public}}assets/images/icons8-damage-64yellow.png" alt="">
                        </div>
                        <div class="contact-title ml-15">
                            <h3>HIER</h3>
                            <div class="contact-content-text">
                                <h5>{{$sinistreOfYesterday}} </h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4">
                    <div class="dreamit-contact-content d-flex">
                        <div class="contact-icon">
                            <img src="{{$public}}assets/images/icons8-damage-64pink.png" alt="">
                        </div>
                        <div class="contact-title ml-15">
                            <h3>CETTE SEMAINE</h3>
                            <div class="contact-content-text">
                                <h5>{{$sinistreOfWeek}} </h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4">
                    <div class="dreamit-contact-content d-flex">
                        <div class="contact-icon">
                            <img src="{{$public}}assets/images/icons8-damage-64red.png" alt="">
                        </div>
                        <div class="contact-title ml-15">
                            <h3>CE MOIS</h3>
                            <div class="contact-content-text">
                                <h5>{{$sinistreOfMonth}} </h5>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="row justify-content-md-center">
                <div class="col-lg-12">
                    <h5 class="mt-70">
                        Listes des sinistres
                    </h5>
                </div>
                <div class="col-lg-12">
                    @if($sinistres)
                    <table class="table table-striped mb-40 mt-40">
                        <thead>
                        <tr>
                            <th scope="col">Numéro de police</th>
                            <th scope="col">Nom et prénoms</th>
                            <th scope="col">Contact</th>
                            <th scope="col">Lieu </th>
                            <th scope="col">Nature de l'intervention</th>
                            <th scope="col">Date du sinistre </th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($sinistres as $sinistre)
                        <tr>
                            <th scope="row">{{ucfirst($sinistre->numero_police)}}</th>
                            <th scope="col">{!! ucfirst(substr($sinistre->name,0,17)) !!}... </th>
                            <th scope="col">{{ucfirst($sinistre->contact1)}}</th>
                            <th scope="col">{{ucfirst($sinistre->lieu)}} </th>
                            <th scope="col">{{$sinistre->nature->libelle??'Aucune'}}</th>
                            <th scope="col">{{date('d/m/Y H:i:s',strtotime($sinistre->date_sinistre))}} </th>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                        {!! $sinistres->links() !!}
                    @else
                    <div>
                        <h5> Aucun siniste enregistré </h5>
                    </div>
                    @endif
                </div>
            </div>

        </div>
    </div>
    <!--==================================================-->


    {{-- location.href = '{{route('ajouter_sinistre')}}';
     $("#cobacot").replaceWith(originalState.clone());
     $("#sinistreForm")[0].reset();
     .attr('data-spartanindexi',0)
     location.href = '{{route('ajouter_sinistre',1)}}';
     --}}
    <!--==================================================-->
@endsection

@push('js')
    <!--//////////////// START PLUGIN POUR UPLOADER PLUSIEURS IMAGES ///////////////////////////////////////////////////////-->
    <script src="/frontend/spartan_multi_image/dist/js/spartan-multi-image-picker.js"></script>
    <script type="text/javascript">
        $(function(){

            $("#coba").spartanMultiImagePicker({
                fieldName:        'fileUpload[]',
                maxCount:         4,
                rowHeight:        '100px',
                groupClassName:   'col-md-3 col-sm-4 col-xs-6',
                maxFileSize:      '',
                dropFileLabel : "Drop Here",
                onAddRow:       function(index){
                    /*  console.log(index);
                      console.log('add new row');*/
                },
                onRenderedPreview : function(index){
                    /*console.log(index);
                    console.log('preview rendered');*/
                },
                onRemoveRow : function(index){
                    /*console.log(index);*/
                },
                /*onExtensionErr : function(index, file){
                    /!*console.log(index, file,  'extension err');*!/
                    alert('Please only input png or jpg type file')
                },*/
                onSizeErr : function(index, file){
                    console.log(index, file,  'file size too big');
                    alert('File size too big');
                }
            });
        });
    </script>
    <!--//////////////// END PLUGIN POUR UPLOADER PLUSIEURS IMAGES ///////////////////////////////////////////////////////-->

    <!--//////////////// START PLUGIN SELECT2 ///////////////////////////////////////////////////////-->
    <script>
        $(document).ready(function() {
            $('.searchpays').select2();
        });
    </script>
    <!--//////////////// START PLUGIN SELECT2 ///////////////////////////////////////////////////////-->

    <!--//////////////// START JQUERY VALIDATE ///////////////////////////////////////////////////////-->
    {{--{{ asset('/frontend/plugin/jqueryvalidite/jqueryvalidate.js')}}--}}
    <script src="{{$public}}plugin/jqueryvalidite/jqueryvalidate.js"></script>
    {{--<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/additional-methods.js"></script>--}}
    <script>
        /* $("select")... ce script permet d'afficher les messages d'erreurs des select de quand on utilise le plugin select2*/
        $("select").on("select2:close", function (e) {
            $(this).valid();
        });
        $(document).ready(function() {
            $("#sinistreForm").validate({
                <!-- onfocusout... Cette fonction permet d'activer blur sur les champs -->
                onfocusout: function(element) {
                    // "eager" validation
                    this.element(element);
                },
                <!-- errorPlacement... Cette fonction permet de fixer l'emplacement du message d'erreur -->
                errorPlacement: function(error, element) {
                    element.parent("div").children(".fieldError").css({'margin-bottom': '-8px', 'margin-top': '-3px'});
                    error.appendTo( element.parent("div").children(".fieldError") );
                },
                rules: {
                    assurance:"required",
                    numero_police : "required" ,
                    name: "required",
                    Contact1: "required",
                    /*prix: {
                        required: true,
                        minlength: 2,
                        number: true
                    },*/
                    lieu: "required",
                    /*email: {
                        required: true,
                        email: true
                    },*/
                    domaine_intervention: "required",
                    date_sinistre: "required",
                    details:"required",
                },
                messages: {
                    assurance:"Veuillez sélectionner une assurance.",
                    numero_police : "Veuillez entrer votre numéro de police.",
                    name:"Veuillez entrer votre nom et prénoms.",
                    Contact1:"Veuillez entrer un numéro de téléphone.",

                    lieu:"Veuillez entrer le lieu du travail.",
                    domaine_intervention:"Veuillez sélectionner la nature de l'intervention",
                    date_sinistre:"Veuillez entrer la date du sinistre.",
                    details:"Veuillez entrer les détails.",
                },
                /*document.getElementsByName("fileUpload[]").forEach((el) => {
                    if ($(el)[0].files[0] != undefined)
                        Form_Data.append('ImagesGallery', $(el)[0].files[0]);
                },*/
                submitHandler: function(form) {
                    if ( $('#sinistreForm').valid() ) {
                        var formdat = $('#sinistreForm')[0];
                        var form_Data = new FormData(formdat);
                        //$('#annonceForm').find('.et_form_btn').prop('disabled', true);
                        $('#etform_inscription').find('.btn-submit').prop('disabled', true);

                        $.ajaxSetup({
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            }
                        });
                        $.ajax({
                            url: '{!!URL::to("sinistre/store")!!}',
                            type: "POST",
                            data: form_Data,
                            contentType: false,
                            cache: false,
                            processData:false,
                            //timeout: 3000

                            // Called on success.
                            success:function(data) {
                                //alert('works');
                                if(data.statut == 0){
                                    $.each(data.error, function(prefix, val){
                                        $('span.'+prefix+'_error').text(val[0]);
                                    });
                                    $('#etform_inscription').find('.btn-submit').prop('disabled', false);
                                    $('.txt_notifi').text('');
                                    $('.txt_notifi').text('Veuillez vérifier les champs requis et les remplir');
                                    $('#ctn_notification').show();

                                } else if(data.statut == 'registerFailed' ) {
                                    $('#etform_inscription').find('.btn-submit').prop('disabled', false);
                                    $('.txt_notifi').text('');
                                    $('.txt_notifi').text(data.errorMessage);
                                    $('#ctn_notification').show();
                                } else if(data.statut == 'sinistreSuccess' ) {
                                    $("#sinistreForm")[0].reset();

                                    $("#assurance").select2({
                                        placeholder: "Choisir une assurance",
                                        allowClear: true
                                    });
                                    $("#domaine_intervention").select2({
                                        placeholder: "Choisir la nature de l'intervention",
                                        allowClear: true
                                    });
                                    window.location.reload();

                                }

                            }
                            // Called on failure.
                        });
                    }
                }
            });


        });
    </script>
    <!-- //////////////////////// END JQUERY VALIDATE ////////////////////////////////////////////////// -->

    <!--//////////////////////// START HIDE NOTIFICATION //////////////////////////////////////////////////-->
    <script>
        $(document).ready(function(){
            //$(wrapper).on('click', '.remove_button', function(e){
            $('#ctn_notification').hide();
            $('#ctn_notification').on('click','.remove_btn_notifi', function(e){
                e.preventDefault();
                $('#ctn_notification').hide();
            });
        });
    </script>
    <!--//////////////////////// END HIDE NOTIFICATION //////////////////////////////////////////////////-->


@endpush
