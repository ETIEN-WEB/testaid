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
    <div class="breatcome-area d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breatcome-content text-center">
                        <div class="breatcome-content-title">
                            <h1 class="text-white">{{$module}}</h1>
                        </div>
                        <div class="breatcome-content-text">
                            <ul>
                                <li><a href="index-2.html">Accueil </a> <i class="fas fa-chevron-right"></i> <span>{{$title}}</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--==================================================-->
    <!--Start dreamit contact Area-->
    <!--==================================================-->
    <div class="contact_area style-three pt-90 pb-85">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="dreamit-section-title style-two pb-10">
                        <div class="dreamit-section-main-title ">
                            <h2> Formulaire de déclaration de  <span> sinistre.</span></h2>
                        </div>

                    </div>
                </div>
            </div>
            <div class="row justify-content-md-center">
                <div class="col-lg-7">
                    <div style="margin-left: -8px;" class="mb-70 mt-20">
                        <div class="header-button">
                            <a href="{{route('sinistre.index')}}">Liste des sinistres</a>
                        </div>
                    </div>
                    <div class="contact_froms style-two">
                        <form action="" method="POST" id="sinistreForm">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form_box mb-3">
                                        <label for="assurance" class="capitalize text-gray-600"> Assurance <strong class="text-red tw_800">*</strong></label>
                                        <select class="form-control searchpays" data-live-search="true" name="assurance" id="assurance">
                                            <option value="" selected>Choisir une assurance </option>
                                            @foreach ($assurances as $assurance)
                                                <option value="{{ $assurance->id }}" >{{ $assurance->libelle }}</option>
                                            @endforeach
                                        </select>
                                        <div class="fieldError"></div>
                                        <span class="txt_red error-text assurance_error"></span>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form_box mb-3">
                                        <label for="numero_police" class="capitalize text-gray-600"> Numéro de police <strong class="text-red tw_800">*</strong></label>
                                        <input class="form-control" type="text" name="numero_police" placeholder="Numéro de police">
                                        <div class="fieldError"></div>
                                        <span class="txt_red error-text numero_police_error"></span>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form_box mb-3">
                                        <label for="name" class="capitalize text-gray-600"> Nom et prénoms <strong class="text-red tw_800">*</strong></label>
                                        <input class="form-control" type="text" name="name" placeholder="Nom et prénoms">
                                        <div class="fieldError"></div>
                                        <span class="txt_red error-text name_error"></span>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form_box mb-3">
                                        <label for="email" class="capitalize text-gray-600"> Email </label>
                                        <input  class="form-control" type="email" name="email" placeholder="Addresse email">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form_box mb-3">
                                        <label for="Contact1" class="capitalize text-gray-600"> Contact 1 <strong class="text-red tw_800">*</strong></label>
                                        <input  class="form-control" type="text" name="Contact1" placeholder="Contact 1">
                                        <div class="fieldError"></div>
                                        <span class="txt_red error-text Contact1_error"></span>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form_box mb-3">
                                        <label for="Contact2" class="capitalize text-gray-600"> Contact 2 </label>
                                        <input  class="form-control" type="text" name="Contact2" placeholder="Contact 2">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form_box mb-3">
                                        <label for="lieu" class="capitalize text-gray-600"> Lieu <strong class="text-red tw_800">*</strong></label>
                                        <input  class="form-control" type="text" name="lieu" placeholder="Lieu">
                                        <div class="fieldError"></div>
                                        <span class="txt_red error-text lieu_error"></span>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form_box mb-3">
                                        <label for="domaine_intervention" class="capitalize text-gray-600"> Nature de l'intervention <strong class="text-red tw_800">*</strong></label>
                                        <select class="form-control searchpays" data-live-search="true" name="domaine_intervention" id="domaine_intervention">
                                            <option value="" selected> Choisir la nature de l'intervention </option>
                                            @foreach ($domaine_interventions as $domaine_intervention)
                                                <option value="{{ $domaine_intervention->id }}" >{{ $domaine_intervention->libelle }}</option>
                                            @endforeach
                                        </select>
                                        <div class="fieldError"></div>
                                        <span class="txt_red error-text domaine_intervention_error"></span>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form_box mb-3">
                                        <label for="date_sinistre" class="capitalize text-gray-600"> Date du sinistre <strong class="text-red tw_800">*</strong></label>
                                        <input  class="form-control" type="datetime-local" name="date_sinistre" placeholder="Date du sinistre">
                                        <div class="fieldError"></div>
                                        <span class="txt_red error-text date_sinistre_error"></span>
                                    </div>
                                </div>
                                <div class="mt-3 col-lg-12">
                                    <div class="col-md-4">
                                        <label for="">Photos de l'annonce </label>
                                    </div>
                                    <div class="ligne_coba">
                                        <div class="col-md-10">
                                                <div class="row" id="coba">
                                                </div>
                                            <div class="photoError txt_red"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form_box mb-1">
                                        <label for="details" class="capitalize text-gray-600"> Détails <strong class="text-red tw_800">*</strong></label>
                                        <textarea  class="form-control" name="details" id="details" cols="30" rows="5" placeholder="Détails "></textarea>
                                        <div class="fieldError"></div>
                                        <span class="txt_red error-text details_error"></span>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="ctn_notifi mt-10 mb-4" id="ctn_notification">
                                        <p class="txt_notifi"> Notification.</p>
                                        <div class="remove_btn_notifi">
                                            <i class="fas fa-times"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="quote_btn text_center pt-3">
                                        <button class="btn" type="submit">Enregistrer</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div id="status"></div>
                    </div>
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
