@extends('layouts.site')

@section('title', 'Foodshop Project | Vexsonic')
@section('meta_description', 'Foodshop is a restaurant ordering and management platform presented as a premium software case study by Vexsonic.')

@section('content')
    <section class="project-hero">
        <div class="container project-hero-grid">
            <div class="project-hero-copy reveal">
                <span class="eyebrow">Featured Project</span>
                <h1>{{ $projects[0]['name'] }}</h1>
                <p>{{ $project['hero']['description'] }}</p>
                <div class="hero-actions">
                    <a href="{{ url('/services') }}#pricing" class="button button-primary">Start Similar Project</a>
                    <a href="{{ url('/') }}#projects" class="button button-secondary">Back to Projects</a>
                </div>
            </div>

            <div class="case-ui reveal reveal-delay">
                <div class="case-window primary">
                    <div class="window-chrome">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                    <div class="case-body">
                        <div class="case-menu">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                        <div class="case-content">
                            <div class="case-banner"></div>
                            <div class="case-cards">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                            <div class="case-table"></div>
                        </div>
                    </div>
                </div>
                <div class="case-window secondary"></div>
            </div>
        </div>
    </section>

    <section class="section-block">
        <div class="container">
            <div class="stats-grid reveal">
                @foreach ($project['highlights'] as $item)
                    <article class="stat-card">
                        <span>{{ $item['label'] }}</span>
                        <strong>{{ $item['value'] }}</strong>
                    </article>
                @endforeach
            </div>
        </div>
    </section>

    <section class="section-block">
        <div class="container">
            <div class="section-heading reveal">
                <span class="eyebrow">Core Features</span>
                <h2>{{ $project['hero']['title'] }}</h2>
                <p>The page content is based on the actual structure of the Foodshop project so the showcase speaks to real modules already present in the system.</p>
            </div>

            <div class="feature-columns">
                @foreach ($project['features'] as $feature)
                    <article class="detail-card reveal">
                        <div class="detail-icon"></div>
                        <p>{{ $feature }}</p>
                    </article>
                @endforeach
            </div>
        </div>
    </section>

    <section class="section-block section-dark">
        <div class="container">
            <div class="timeline-panel">
                <div class="section-heading reveal">
                    <span class="eyebrow">Project Flow</span>
                    <h2>How a software product like Foodshop is presented and delivered.</h2>
                </div>

                <div class="timeline-grid">
                    @foreach ($project['timeline'] as $step)
                        <article class="timeline-card reveal">
                            <span class="timeline-step">{{ $loop->iteration }}</span>
                            <h3>{{ $step['phase'] }}</h3>
                            <p>{{ $step['copy'] }}</p>
                        </article>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <section class="section-block">
        <div class="container">
            <div class="section-heading reveal">
                <span class="eyebrow">Packages</span>
                <h2>Suggested pricing for a restaurant software build.</h2>
                <p>These package examples help explain how a client can move from a simple product showcase to a more complete custom system.</p>
            </div>

            <div class="pricing-grid">
                <article class="pricing-card reveal">
                    <span class="plan-name">Starter</span>
                    <strong>$900</strong>
                    <p>Showcase website plus product overview and feature storytelling.</p>
                    <ul class="feature-list compact">
                        <li>Home page design</li>
                        <li>One project detail page</li>
                        <li>Services and pricing sections</li>
                    </ul>
                </article>
                <article class="pricing-card pricing-card-featured reveal">
                    <span class="plan-name">Business</span>
                    <strong>$1,800</strong>
                    <p>Restaurant platform presentation with ordering flow, dashboards, and polished software visuals.</p>
                    <ul class="feature-list compact">
                        <li>Expanded case-study page</li>
                        <li>Interactive product mockups</li>
                        <li>Custom content strategy</li>
                        <li>Premium software-company styling</li>
                    </ul>
                </article>
                <article class="pricing-card reveal">
                    <span class="plan-name">Enterprise</span>
                    <strong>$3,000+</strong>
                    <p>For companies wanting custom modules, portal planning, and deeper operational software design.</p>
                    <ul class="feature-list compact">
                        <li>Multi-role system planning</li>
                        <li>Additional project pages</li>
                        <li>Extended workflow consulting</li>
                    </ul>
                </article>
            </div>
        </div>
    </section>
@endsection
