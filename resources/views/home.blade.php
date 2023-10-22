@extends('layouts.master')

@section('page_name', 'Accueil')

@section('has-top-bar')
    <a href="#" id="top-bar-js" class="top-bar-link">
        <i class="seosight-icon seoicon-arrow-to-bottom"></i>
    </a>
@endsection

@section('content')
    <main style="position: relative;" class="red-color">
        <!-- About Section -->
        <section class="about-section">
            <div class="section-image">
                <img style="width: 400px" src="{{ asset('images/tof.png') }}" alt="logo" />
            </div>

            <div class="about-content">
                <h2 class="section-title">
                    About us
                </h2>
                <article class="clear-marge">
                    <p style="font-size: 1.3em">
                        The African Institute of Data-driven Animal and Plant Breeding and
                        Genetics (DATAGENES-AFRICA) is a non-governmental research
                        organisation registered under № 6/01/PDC/SG/SAG/SA/05/01/2022 in Benin
                        Republic. Our goal is to support farmers in data recording and
                        integration of genetic information and climate resilience in animal,
                        aquaculture and plant breeding strategies to drive sustainable genetic
                        improvement in Africa.
                    </p>
                </article>
            </div>
        </section>

        <!-- Vision Section -->
        <section class="vision-section">
            <h2 class="section-title secondary-color">
                Vision
            </h2>
            <article class="clear-marge">
                <p style="font-size: 1.3em; text-align: center">
                    To be one of the best research organizations in animal, aquaculture and
                    plant breeding and genetics in Africa
                </p>
            </article>
        </section>

        <!-- Missions Section -->
        <section style="padding: 40px 80px" class="missions-section">
            <h2 class="section-title missions-title">
                Missions
            </h2>
            <article style="display: block" class="clear-marge">
                <ul style="list-style-type: none">
                    <li style="display: inline-block; margin-top: 10px; font-size: 1.3em">
                        1- To support smallholder farmers in animal identification, perfomance
                        and pedigree recording and genetic evaluation
                    </li>
                    <li style="display: inline-block; margin-top: 10px; font-size: 1.3em">
                        2- Develop climate-smart and community-based breeding strategies for
                        livestock, fish, and aquaculture species in Africa
                    </li>
                    <li style="display: inline-block; margin-top: 10px; font-size: 1.3em">
                        3- Develop capacity building programmes on how to use data science and
                        genomic tools in animal, aquaculture and plant breeding in Africa
                    </li>
                </ul>
            </article>
        </section>

        <!-- Partners Section -->
        <section class="prospective-section">
            <h2 class="section-title secondary-color">
                prospective partners
            </h2>
            <article class="section clear-marge">
                <ul>
                    <li style="display: block; margin-top: 10px; font-size: 1.3em">
                        1- Agribusiness and Innovation Centre (AGRIBIC, Benin)
                    </li>
                    <li style="display: inline-block; margin-top: 10px; font-size: 1.3em">
                        2- African Biogenome Project (AfricaBP,
                        <span><a target="_blank" style="color: #fff"
                                href="https://africanbiogenome.org/">https://africanbiogenome.org/</a></span>)
                    </li>
                </ul>
            </article>
        </section>

        <!-- Galery Section -->
        <section class="galery-section">
            <h2 style="
          font-size: 1.8em;
          font-weight: 900;
          text-transform: uppercase;
          text-align: center;
        "
                class="section-title">
                galery
            </h2>

            <div style="
          display: flex;
          padding: 0 70px;
          justify-content: space-evenly;
          flex-wrap: wrap;
        "
                class="galery-images">
                <div style="width: 450px; height: 300px; margin-bottom: 25px; padding: 10px">
                    <img style="width: 100%; height: 100%" src="{{ asset('images/boeuf1.webp') }}" alt="" />
                </div>
                <div style="width: 450px; height: 300px; margin-bottom: 25px; padding: 10px">
                    <img style="width: 100%; height: 100%" src="{{ asset('images/boeuf2.webp') }}" alt="" />
                </div>
                <div style="width: 450px; height: 300px; margin-bottom: 25px; padding: 10px">
                    <img style="width: 100%; height: 100%" src="{{ asset('images/chevres.webp') }}" alt="" />
                </div>
                <div style="width: 450px; height: 300px; margin-bottom: 25px; padding: 10px">
                    <img style="width: 100%; height: 100%" src="{{ asset('images/boeuf3.webp') }}" alt="" />
                </div>
            </div>
        </section>

        {{-- Ateliers section --}}
        <section class="ateliers-section">
            <h2 style="
          font-size: 1.8em;
          font-weight: 900;
          text-transform: uppercase;
          text-align: center;
        "
                class="section-title">
                our works
            </h2>

            <div style="
          display: flex;
          padding: 0 70px;
          justify-content: space-evenly;
          flex-wrap: wrap;
        "
                class="galery-images">
                <div style="width: 450px; height: 300px; margin-bottom: 25px; padding: 10px">
                    <img style="width: 100%; height: 100%" src="{{ asset('images/work01.jpg') }}" alt="" />
                </div>
                <div style="width: 450px; height: 300px; margin-bottom: 25px; padding: 10px">
                    <img style="width: 100%; height: 100%" src="{{ asset('images/work02.jpg') }}" alt="" />
                </div>
                <div style="width: 450px; height: 300px; margin-bottom: 25px; padding: 10px">
                    <img style="width: 100%; height: 100%" src="{{ asset('images/work08.jpg') }}" alt="" />
                </div>
                <div style="width: 450px; height: 300px; margin-bottom: 25px; padding: 10px">
                    <img style="width: 100%; height: 100%" src="{{ asset('images/work05.jpg') }}" alt="" />
                </div>
                <div style="width: 450px; height: 300px; margin-bottom: 25px; padding: 10px">
                    <img style="width: 100%; height: 100%" src="{{ asset('images/work06.jpg') }}" alt="" />
                </div>
                <div style="width: 450px; height: 300px; margin-bottom: 25px; padding: 10px">
                    <img style="width: 100%; height: 100%" src="{{ asset('images/work07.jpg') }}" alt="" />
                </div>
            </div>
        </section>
    </main>
@endsection
