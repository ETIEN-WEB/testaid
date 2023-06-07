@extends('themes.layouts.template')

@section('content')
<!--Start cleaning slider area -->
<!--==================================================-->
@include('themes.parts.slider_list')
<!--==================================================-->
<!--Start cleaning about Area-->
<!--==================================================-->
@include('themes.parts.dreamit_about')
<!--==================================================-->
<!--Start vision_section-->
<!--==================================================-->
@include('themes.parts.vision_section')
<!--==================================================-->
<!--Start vision_section-->
<!--==================================================-->
{{--@include('themes.parts.dreamit_service')--}}
<!--==================================================-->
<!--Start vision_section-->
<!--==================================================-->
@include('themes.parts.dreamit_choose_us')
<!--==================================================-->
<!--Start dreamit choose us Area-->
<!--==================================================-->
@include('themes.parts.telecharger_appli')
<!--==================================================-->
<!--Start service-area-->
<!--==================================================-->
@include('themes.parts.service_area')
<!--==================================================-->
<!--Start paiement Area-->
<!--==================================================-->
@include('themes.parts.paiement')
<!--==================================================-->

<!--Start pricing Area-->
<!--==================================================-->
<div class="priching-area pt-110 pb-80">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="dreamit-section-title style-two">
                    <div class="dreamit-section-main-title pb-30">
                        <h2> Nos <span> formules </span></h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="row pt-25">
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="dreamit-single-pricing-box">
                    <div class="pricing-top-bar pricing_help">
                        <div class="pricing-title">
                            <h3>HELP</h3>
                        </div>
                        <div class="pricing-content-inner pt-45">
                            <span class="price-dolor">Plafond garantie <br> 250 000 F CFA </span>
                            {{--<span class="tk">49</span>
                            <span>/ month</span>--}}
                        </div>
                    </div>
                    <div class="pricing-content">
                        <div class="pricing-thumb help_thumb">
                            <img src="{{$public}}assets/images/wrench.png" alt="">
                        </div>
                        <div class="pricing-body">
                            <ul class="pricing_ul help_ul">
                                <li>
                                    <div class="d-flex"> <i class="fas fa-check"></i> </div>
                                    <div>
                                        <div>
                                            <span class="fw_510"> Dont matériel : </span> : 250 000 F CFA
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-flex"> <i class="fas fa-check"></i> </div>
                                    <div>
                                        <div>
                                            <span class="fw_510"> Métiers : </span> 4 – Plomberie – Électricité – Serrurerie – Froid
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-flex"> <i class="fas fa-check"></i> </div>
                                    <div>
                                        <div>
                                            <span class="fw_510"> Fréquences : </span> 5 prestation /jours
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-flex"> <i class="fas fa-check"></i> </div>
                                    <div>
                                        <div>
                                            <span class="fw_510"> Gestionnaire client / Conseiller travaux : </span> Dédié 24h/24
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-flex"> <i class="fas fa-check"></i> </div>
                                    <div>
                                        <div>
                                            <span class="fw_510"> Facturation : </span> 50 000 F CFA- prime annuelle
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-flex"> <i class="fas fa-check"></i> </div>
                                    <div>
                                        <div>
                                            <span class="fw_510"> Urgences : </span> Dans les 12h
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-flex"> <i class="fas fa-check"></i> </div>
                                    <div>
                                        <div>
                                            <span class="fw_510"> Disponibilité service : </span> 7h-22h
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-flex"> <i class="fas fa-check"></i> </div>
                                    <div>
                                        <div>
                                            <span class="fw_510"> Maintenance préventive : </span> Check-up semestrielle + rapport + Réparation des
                                            pannes mineure.
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <div class="pricing-button pricing_btn_help">
                                <a href="#" class="a_help">Souscrire</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="dreamit-single-pricing-box style-two">
                    <div class="pricing-top-bar pricing_repair">
                        <div class="pricing-title">
                            <h3>REPAIR</h3>
                        </div>
                        <div class="pricing-content-inner pt-45">
                            <span class="price-dolor"> Plafond garantie <br>  500 000 F CFA </span>
                        </div>
                    </div>
                    <div class="pricing-content">
                        <div class="pricing-thumb repair_thumb">
                            <img src="{{$public}}assets/images/tools.png" alt="">
                        </div>
                        <div class="pricing-body">
                            <ul class="pricing_ul repair_ul">
                                <li>
                                    <div class="d-flex"> <i class="fas fa-check"></i> </div>
                                    <div>
                                        <div>
                                            <span class="fw_510"> Dont matériel : </span> : 250 000 F CFA
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-flex"> <i class="fas fa-check"></i> </div>
                                    <div>
                                        <div>
                                            <span class="fw_510"> Métiers : </span> 4 – Plomberie – Électricité – Serrurerie – Froid
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-flex"> <i class="fas fa-check"></i> </div>
                                    <div>
                                        <div>
                                            <span class="fw_510"> Fréquences : </span> 5 prestation /jours
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-flex"> <i class="fas fa-check"></i> </div>
                                    <div>
                                        <div>
                                            <span class="fw_510"> Gestionnaire client / Conseiller travaux : </span> Dédié 24h/24
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-flex"> <i class="fas fa-check"></i> </div>
                                    <div>
                                        <div>
                                            <span class="fw_510"> Facturation : </span> 50 000 F CFA- prime annuelle
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-flex"> <i class="fas fa-check"></i> </div>
                                    <div>
                                        <div>
                                            <span class="fw_510"> Urgences : </span> Dans les 12h
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-flex"> <i class="fas fa-check"></i> </div>
                                    <div>
                                        <div>
                                            <span class="fw_510"> Disponibilité service : </span> 7h-22h
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-flex"> <i class="fas fa-check"></i> </div>
                                    <div>
                                        <div>
                                            <span class="fw_510"> Maintenance préventive : </span> Check-up semestrielle + rapport + Réparation des
                                            pannes mineure.
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <div class="pricing-button pricing_btn_repair">
                                <a class="active" href="#">Souscrire</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="dreamit-single-pricing-box style-three">
                    <div class="pricing-top-bar pricing_fix">
                        <div class="pricing-title">
                            <h3>FIX</h3>
                        </div>
                        <div class="pricing-content-inner pt-45">
                            <span class="price-dolor">Plafond garantie <br> 1 000 000 F CFA </span>
                        </div>
                    </div>
                    <div class="pricing-content">
                        <div class="pricing-thumb fix_thumb">
                            <img src="{{$public}}assets/images/hand-tool.png" alt="">
                        </div>
                        <div class="pricing-body">
                            <ul class="pricing_ul fix_ul">
                                <li>
                                    <div class="d-flex"> <i class="fas fa-check"></i> </div>
                                    <div>
                                        <div>
                                            <span class="fw_510"> Dont matériel : </span> 500 000 F CFA
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-flex"> <i class="fas fa-check"></i> </div>
                                    <div>
                                        <div>
                                            <span class="fw_510"> Métiers : </span> 5 – Plomberie – Électricité – Serrurerie – Froid – Étanchéité
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-flex"> <i class="fas fa-check"></i> </div>
                                    <div>
                                        <div>
                                            <span class="fw_510"> Fréquences : </span> 3 prestation /jours
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-flex"> <i class="fas fa-check"></i> </div>
                                    <div>
                                        <div>
                                            <span class="fw_510"> Gestionnaire client / Conseiller travaux : </span> Dédié 24h/24
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-flex"> <i class="fas fa-check"></i> </div>
                                    <div>
                                        <div>
                                            <span class="fw_510"> Facturation : </span> 100 000 F CFA - prime annuelle
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-flex"> <i class="fas fa-check"></i> </div>
                                    <div>
                                        <div>
                                            <span class="fw_510"> Urgences : </span> Dans les 2 heures
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-flex"> <i class="fas fa-check"></i> </div>
                                    <div>
                                        <div>
                                            <span class="fw_510"> Disponibilité service : </span> 24h/24
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-flex"> <i class="fas fa-check"></i> </div>
                                    <div>
                                        <div>
                                            <span class="fw_510"> Maintenance préventive : </span> Check-up trimestrielle +
                                            rapport + Réparation des
                                            pannes mineures
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <div class="pricing-button pricing_btn_fix">
                                <a href="#" class="a_fix">Souscrire</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--==================================================-->
<!--Star dreamit testimonial Area-->
<!--==================================================-->
@include('themes.parts.testimonial')
<!--==================================================-->
<!--Start dreamit testimonial Area-->
<!--==================================================-->
@include('themes.parts.brand_other')
@endsection
