@extends('layouts.app')
@section('content')
    <div class="bg-primary-fade">
        <div class="banner-about mb-5">
            <div class="py-4"></div>
            <div class="container">
                <div class="align-self-center text-center text-indigo">
                    <h1 class="text-capitalize">About {{ config('app.name') }}</h1>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas, voluptatem!
                    </p>
                </div>
            </div>
            <div class="py-4"></div>
        </div>
        <div class="bg-primary-fade">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 align-self-center mb-3">
                        <h2>
                            About {{ config('app.name') }}
                        </h2>
                        <p>
                            Land use is central to addressing sustainability issues, including biodiversity conservation, climate change, food security,
                            poverty alleviation, and sustainable energy. In this paper, we synthesize knowledge accumulated in land system science,
                            the integrated study of terrestrial social-ecological systems, into 10 hard truths that have strong, general, empirical support.
                        </p>
                        <p>
                            These facts help to explain the challenges of achieving sustainability in land use and thus also point toward solutions.
                        </p>
                    </div>
                    <div class="col-sm-6 mb-3">
                        <img src="{{ asset('images/pics/sky-land.jpg') }}" alt="..." class="img-fluid rounded-3">
                    </div>
                </div>
            </div>
        </div>
        <div class="py-5"></div>
        <div>
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 mb-3">
                        <img src="{{ asset('images/pics/meru-land.jpg') }}" alt="..." class="img-fluid rounded-3">
                    </div>
                    <div class="col-sm-6 align-self-center mb-3">
                        <h2>Why we are different</h2>
                        <p>
                            How human societies use, manage, and interact with land is key to addressing current sustainability issues including nature conservation, climate change, food security, poverty alleviation, and energy transitions, framed in high-level political agreements from the 2030 Agenda for Sustainable Development to the Paris Climate Agreement or the Convention on Biological Diversity.
                        </p>
                        <p>
                            Despite the centrality of land use to these debates, long-disproven misconceptions, partial framings, and ill-conceived ideas continue to permeate these discussions, such as the misconception that there is abundant land available globally that is “unused” or “uncontested”
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="py-5"></div>
        <div>
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 align-self-center mb-3">
                        <h2>
                            More About {{ config('app.name') }}
                        </h2>
                        <p>
                            Land systems are terrestrial social-ecological systems where human and environmental systems interact through land use and are the focus of the interdisciplinary field of LSS (4, 5). From knowledge accumulated over decades by a large and diverse LSS community, we extracted key insights that scientists, policy and decision makers, and practitioners should understand about land use.
                        </p>
                        <p>
                            These insights are akin to “stylized facts” or “empirical regularities” in economics or ecology, i.e., empirical generalizations supported by a solid body of evidence that represent the current state of knowledge on land systems.
                        </p>
                    </div>
                    <div class="col-sm-6 mb-3">
                        <img src="{{ asset('images/pics/sky-dry.jpg') }}" alt="..." class="img-fluid rounded-3">
                    </div>
                </div>
            </div>
        </div>
        <div class="py-5"></div>
    </div>
@endsection
