@extends('layout.app')
@section('content')
<!-- Hero Start -->
        <section class="bg-half bg-light d-table w-100">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12 text-center">
                        <div class="page-next-level">
                            <h4 class="title"> Components </h4>
                            <div class="page-next">
                                <nav aria-label="breadcrumb" class="d-inline-block">
                                    <ul class="breadcrumb bg-white rounded shadow mb-0">
                                        <li class="breadcrumb-item"><a href="index.html">Landrick</a></li>
                                        <li class="breadcrumb-item"><a href="#">Docs</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Components</li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>  <!--end col-->
                </div><!--end row-->
            </div> <!--end container-->
        </section><!--end section-->
        <!-- Hero End -->

        <!-- Shape Start -->
        <div class="position-relative">
            <div class="shape overflow-hidden text-white">
                <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
                </svg>
            </div>
        </div>
        <!--Shape End-->

        <!-- Start -->
        <section class="section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-4 col-12 d-none d-md-block">
                        <div class="sticky-bar component-wrapper bg-light rounded shadow p-4">
                            <ul class="list-unstyled mb-0">
                                <li><a href="#typography" class="active mouse-down h6 text-dark">Typography Heading</a></li>
                                <li><a href="#display" class="mouse-down h6 text-dark">Display Heading</a></li>
                                <li><a href="#bg-colors" class="mouse-down h6 text-dark">Background Colors</a></li>
                                <li><a href="#text-colors" class="mouse-down h6 text-dark">Text Colors</a></li>
                                <li><a href="#buttons" class="mouse-down h6 text-dark">Buttons</a></li>
                                <li><a href="#dropdowns" class="mouse-down h6 text-dark">Dropdowns</a></li>
                                <li><a href="#badges" class="mouse-down h6 text-dark">Badges</a></li>
                                <li><a href="#alerts" class="mouse-down h6 text-dark">Alerts</a></li>
                                <li><a href="#accordions" class="mouse-down h6 text-dark">Accordions</a></li>
                                <li><a href="#cards" class="mouse-down h6 text-dark">Cards</a></li>
                                <li><a href="#forms" class="mouse-down h6 text-dark">Forms</a></li>
                                <li><a href="#checkboxes" class="mouse-down h6 text-dark">Checkboxes</a></li>
                                <li><a href="#radio-buttons" class="mouse-down h6 text-dark">Radio Buttons</a></li>
                                <li><a href="#switches" class="mouse-down h6 text-dark">Switches Buttons</a></li>
                                <li><a href="#select-box" class="mouse-down h6 text-dark">Form Select Box</a></li>
                                <li><a href="#subscribe-forms" class="mouse-down h6 text-dark">Subscribe Forms</a></li>
                                <li><a href="#map" class="mouse-down h6 text-dark">Google Map</a></li>
                                <li><a href="#breadcrumbs" class="mouse-down h6 text-dark">Breadcrumbs</a></li>
                                <li><a href="#pagination" class="mouse-down h6 text-dark">Pagination</a></li>
                                <li><a href="#avatar" class="mouse-down h6 text-dark">Avatar</a></li>
                                <li><a href="#nav-tabs" class="mouse-down h6 text-dark">Nav Tabs</a></li>
                                <li><a href="#progressbar" class="mouse-down h6 text-dark">Progressbar</a></li>
                                <li><a href="#tooltips" class="mouse-down h6 text-dark">Tooltips</a></li>
                                <li><a href="#modals" class="mouse-down h6 text-dark">Modals</a></li>
                                <li><a href="#tables" class="mouse-down h6 text-dark">Tables</a></li>
                                <li><a href="#blockquotes" class="mouse-down h6 text-dark">Blockquotes</a></li>
                                <li><a href="#icons" class="mouse-down h6 text-dark">Icons</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-9 col-md-8 col-12 mt-4 pt-2 mt-sm-0 pt-sm-0">
                        <div class="row row-cols-1 ml-lg-2">   
                            <!-- Typography Heading Start -->
                            <div class="col" id="typography">
                                <div class="component-wrapper rounded shadow">
                                    <div class="p-4 border-bottom">
                                        <h4 class="title mb-0"> Typography Heading </h4>
                                    </div>
        
                                    <div class="p-4">
                                        <h6 class="text-muted mb-4 pb-2">Ex. <code class="text-danger">&lt;h1&gt; H1. Bootstrap heading &lt;/h1&gt;</code></h6>
                                        
                                        <h1>H1. Bootstrap heading</h1>
                                        <h2>H2. Bootstrap heading</h2>
                                        <h3>H3. Bootstrap heading</h3>
                                        <h4>H4. Bootstrap heading</h4>
                                        <h5>H5. Bootstrap heading</h5>
                                        <h6 class="mb-0">H6. Bootstrap heading</h6>
                                    </div>
                                </div>
                            </div><!--end col-->
                            <!-- Typography Heading End -->

                            <!-- Display Heading Start -->
                            <div class="col mt-4 pt-2" id="display">
                                <div class="component-wrapper rounded shadow">
                                    <div class="p-4 border-bottom">
                                        <h4 class="title mb-0"> Display Heading </h4>
                                    </div>
        
                                    <div class="p-4">
                                        <h6 class="text-muted mb-4 pb-2">Ex. <code class="text-danger">&lt;p class="display-1"&gt; Display 1 &lt;/p&gt;</code></h6>
                                        
                                        <p class="display-1">Display 1</p>
                                        <p class="display-2">Display 2</p>
                                        <p class="display-3">Display 3</p>
                                        <p class="display-4 mb-0">Display 4</p>
                                    </div>
                                </div>
                            </div><!--end col-->
                            <!-- Display Button End -->

                            <!-- BG Color Start -->
                            <div class="col mt-4 pt-2" id="bg-colors">
                                <div class="component-wrapper rounded shadow">
                                    <div class="p-4 border-bottom">
                                        <h4 class="title mb-0"> Background Color </h4>
                                    </div>

                                    <div class="p-4">
                                        <h6 class="text-muted mb-2 pb-2">Ex. <code class="text-danger">&lt;div class="bg-primary"&gt; Landrick Saas & Software Template &lt;/div&gt;</code></h6>
                                        
                                        <div class="d-inline-block mr-1 mt-2" data-toggle="tooltip" data-placement="top" title=".bg-primary">
                                            <p class="avatar avatar-small bg-primary rounded mb-0"></p>
                                        </div>

                                        <div class="d-inline-block mr-1 mt-2" data-toggle="tooltip" data-placement="top" title=".bg-secondary">
                                            <p class="avatar avatar-small bg-secondary rounded mb-0"></p>
                                        </div>

                                        <div class="d-inline-block mr-1 mt-2" data-toggle="tooltip" data-placement="top" title=".bg-success">
                                            <p class="avatar avatar-small bg-success rounded mb-0"></p>
                                        </div>

                                        <div class="d-inline-block mr-1 mt-2" data-toggle="tooltip" data-placement="top" title=".bg-danger">
                                            <p class="avatar avatar-small bg-danger rounded mb-0"></p>
                                        </div>

                                        <div class="d-inline-block mr-1 mt-2" data-toggle="tooltip" data-placement="top" title=".bg-warning">
                                            <p class="avatar avatar-small bg-warning rounded mb-0"></p>
                                        </div>

                                        <div class="d-inline-block mr-1 mt-2" data-toggle="tooltip" data-placement="top" title=".bg-info">
                                            <p class="avatar avatar-small bg-info rounded mb-0"></p>
                                        </div>

                                        <div class="d-inline-block mr-1 mt-2" data-toggle="tooltip" data-placement="top" title=".bg-light">
                                            <p class="avatar avatar-small bg-light rounded mb-0"></p>
                                        </div>

                                        <div class="d-inline-block mr-1 mt-2" data-toggle="tooltip" data-placement="top" title=".bg-white">
                                            <p class="avatar avatar-small bg-white border rounded mb-0"></p>
                                        </div>

                                        <div class="d-inline-block mr-1 mt-2" data-toggle="tooltip" data-placement="top" title=".bg-dark">
                                            <p class="avatar avatar-small bg-dark rounded mb-0"></p>
                                        </div>

                                        <div class="d-inline-block mr-1 mt-2" data-toggle="tooltip" data-placement="top" title=".bg-muted">
                                            <p class="avatar avatar-small bg-muted rounded mb-0"></p>
                                        </div>
                                    </div>
                                </div>
                            </div><!--end col-->
                            <!-- BG Color End -->

                            <!-- BG Color Start -->
                            <div class="col mt-4 pt-2" id="bg-colors">
                                <div class="component-wrapper rounded shadow">
                                    <div class="p-4 border-bottom">
                                        <h4 class="title mb-0"> Soft Background Color </h4>
                                    </div>

                                    <div class="p-4">
                                        <h6 class="text-muted mb-2 pb-2">Ex. <code class="text-danger">&lt;div class="bg-soft-primary"&gt; Landrick Saas & Software Template &lt;/div&gt;</code></h6>
                                        
                                        <div class="d-inline-block mr-1 mt-2" data-toggle="tooltip" data-placement="top" title=".bg-soft-primary">
                                            <p class="avatar avatar-small bg-soft-primary rounded mb-0"></p>
                                        </div>

                                        <div class="d-inline-block mr-1 mt-2" data-toggle="tooltip" data-placement="top" title=".bg-soft-secondary">
                                            <p class="avatar avatar-small bg-soft-secondary rounded mb-0"></p>
                                        </div>

                                        <div class="d-inline-block mr-1 mt-2" data-toggle="tooltip" data-placement="top" title=".bg-soft-success">
                                            <p class="avatar avatar-small bg-soft-success rounded mb-0"></p>
                                        </div>

                                        <div class="d-inline-block mr-1 mt-2" data-toggle="tooltip" data-placement="top" title=".bg-soft-danger">
                                            <p class="avatar avatar-small bg-soft-danger rounded mb-0"></p>
                                        </div>

                                        <div class="d-inline-block mr-1 mt-2" data-toggle="tooltip" data-placement="top" title=".bg-soft-warning">
                                            <p class="avatar avatar-small bg-soft-warning rounded mb-0"></p>
                                        </div>

                                        <div class="d-inline-block mr-1 mt-2" data-toggle="tooltip" data-placement="top" title=".bg-soft-info">
                                            <p class="avatar avatar-small bg-soft-info rounded mb-0"></p>
                                        </div>

                                        <div class="d-inline-block mr-1 mt-2" data-toggle="tooltip" data-placement="top" title=".bg-soft-light">
                                            <p class="avatar avatar-small bg-soft-light rounded mb-0"></p>
                                        </div>

                                        <div class="d-inline-block mr-1 mt-2" data-toggle="tooltip" data-placement="top" title=".bg-soft-white">
                                            <p class="avatar avatar-small bg-soft-white border rounded mb-0"></p>
                                        </div>

                                        <div class="d-inline-block mr-1 mt-2" data-toggle="tooltip" data-placement="top" title=".bg-soft-dark">
                                            <p class="avatar avatar-small bg-soft-dark rounded mb-0"></p>
                                        </div>

                                        <div class="d-inline-block mr-1 mt-2" data-toggle="tooltip" data-placement="top" title=".bg-soft-muted">
                                            <p class="avatar avatar-small bg-soft-muted rounded mb-0"></p>
                                        </div>
                                    </div>
                                </div>
                            </div><!--end col-->
                            <!-- BG Color End -->

                            <!-- Text Color Start -->
                            <div class="col mt-4 pt-2" id="text-colors">
                                <div class="component-wrapper rounded shadow">
                                    <div class="p-4 border-bottom">
                                        <h4 class="title mb-0"> Text Color </h4>
                                    </div>
        
                                    <div class="p-4">
                                        <h6 class="text-muted mb-4 pb-2">Ex. <code class="text-danger">&lt;div class="text-primary"&gt; Landrick Saas & Software Template &lt;/div&gt;</code></h6>

                                        <h6 class="text-primary">.text-primary</h6>
                                        <h6 class="text-secondary">.text-secondary</h6>
                                        <h6 class="text-success">.text-success</h6>
                                        <h6 class="text-danger">.text-danger</h6>
                                        <h6 class="text-warning">.text-warning</h6>
                                        <h6 class="text-info">.text-info</h6>
                                        <h6 class="text-light bg-dark">.text-light</h6>
                                        <h6 class="text-white bg-dark">.text-white</h6>
                                        <h6 class="text-white-50 bg-dark">.text-white-50</h6>
                                        <h6 class="text-dark mb-0">.text-dark</h6>
                                    </div>
                                </div>
                            </div><!--end col-->                            
                            <!-- Text Color End -->
                            
                            <!-- Buttons Start -->
                            <div class="col mt-4 pt-2" id="buttons">
                                <div class="component-wrapper rounded shadow">
                                    <div class="p-4 border-bottom">
                                        <h4 class="title mb-0">Buttons</h4>
                                    </div>
        
                                    <div class="p-4">
                                        <h6 class="text-muted mb-2 pb-2">Ex. <code class="text-danger">&lt;a href="#" class="btn btn-primary"&gt; Primary &lt;/a&gt;</code></h6>
                                        
                                        <a href="javascript:void(0)" class="btn btn-primary mt-2 mr-2">Primary</a>
                                        <a href="javascript:void(0)" class="btn btn-secondary mt-2 mr-2">Secondary</a>
                                        <a href="javascript:void(0)" class="btn btn-success mt-2 mr-2">Success</a>
                                        <a href="javascript:void(0)" class="btn btn-danger mt-2 mr-2">Danger</a>
                                        <a href="javascript:void(0)" class="btn btn-info mt-2 mr-2">Info</a>
                                        <a href="javascript:void(0)" class="btn btn-warning mt-2 mr-2">Warning</a>
                                        <a href="javascript:void(0)" class="btn btn-light mt-2 mr-2">Light</a>
                                        <a href="javascript:void(0)" class="btn btn-dark mt-2 mr-2">Dark</a>
                                    </div>
                                </div>
                            </div><!--end col-->
                            <!-- Buttons End -->

                            <!-- Buttons Pill Start -->
                            <div class="col mt-4 pt-2">
                                <div class="component-wrapper rounded shadow">
                                    <div class="p-4 border-bottom">
                                        <h4 class="title mb-0">Buttons Pill</h4>
                                    </div>
        
                                    <div class="p-4">
                                        <h6 class="text-muted mb-2 pb-2">Ex. <code class="text-danger">&lt;a href="#" class="btn btn-pills btn-primary"&gt; Primary &lt;/a&gt;</code></h6>

                                        <a href="javascript:void(0)" class="btn btn-pills btn-primary mt-2 mr-2">Primary</a>
                                        <a href="javascript:void(0)" class="btn btn-pills btn-secondary mt-2 mr-2">Secondary</a>
                                        <a href="javascript:void(0)" class="btn btn-pills btn-success mt-2 mr-2">Success</a>
                                        <a href="javascript:void(0)" class="btn btn-pills btn-danger mt-2 mr-2">Danger</a>
                                        <a href="javascript:void(0)" class="btn btn-pills btn-info mt-2 mr-2">Info</a>
                                        <a href="javascript:void(0)" class="btn btn-pills btn-warning mt-2 mr-2">Warning</a>
                                        <a href="javascript:void(0)" class="btn btn-pills btn-light mt-2 mr-2">Light</a>
                                        <a href="javascript:void(0)" class="btn btn-pills btn-dark mt-2 mr-2">Dark</a>
                                    </div>
                                </div>
                            </div><!--end col-->
                            <!-- Buttons Pill End -->

                            <!-- Buttons Start -->
                            <div class="col mt-4 pt-2" id="buttons">
                                <div class="component-wrapper rounded shadow">
                                    <div class="p-4 border-bottom">
                                        <h4 class="title mb-0">Buttons Soft</h4>
                                    </div>
        
                                    <div class="p-4">
                                        <h6 class="text-muted mb-2 pb-2">Ex. <code class="text-danger">&lt;a href="#" class="btn btn-soft-primary"&gt; Primary &lt;/a&gt;</code></h6>
                                        
                                        <a href="javascript:void(0)" class="btn btn-soft-primary mt-2 mr-2">Primary</a>
                                        <a href="javascript:void(0)" class="btn btn-soft-secondary mt-2 mr-2">Secondary</a>
                                        <a href="javascript:void(0)" class="btn btn-soft-success mt-2 mr-2">Success</a>
                                        <a href="javascript:void(0)" class="btn btn-soft-danger mt-2 mr-2">Danger</a>
                                        <a href="javascript:void(0)" class="btn btn-soft-info mt-2 mr-2">Info</a>
                                        <a href="javascript:void(0)" class="btn btn-soft-warning mt-2 mr-2">Warning</a>
                                        <a href="javascript:void(0)" class="btn btn-soft-light mt-2 mr-2">Light</a>
                                        <a href="javascript:void(0)" class="btn btn-soft-dark mt-2 mr-2">Dark</a>
                                    </div>
                                </div>
                            </div><!--end col-->
                            <!-- Buttons End -->

                            <!-- Buttons Pill Start -->
                            <div class="col mt-4 pt-2">
                                <div class="component-wrapper rounded shadow">
                                    <div class="p-4 border-bottom">
                                        <h4 class="title mb-0">Buttons Pill Soft</h4>
                                    </div>
        
                                    <div class="p-4">
                                        <h6 class="text-muted mb-2 pb-2">Ex. <code class="text-danger">&lt;a href="#" class="btn btn-pills btn-soft-primary"&gt; Primary &lt;/a&gt;</code></h6>

                                        <a href="javascript:void(0)" class="btn btn-pills btn-soft-primary mt-2 mr-2">Primary</a>
                                        <a href="javascript:void(0)" class="btn btn-pills btn-soft-secondary mt-2 mr-2">Secondary</a>
                                        <a href="javascript:void(0)" class="btn btn-pills btn-soft-success mt-2 mr-2">Success</a>
                                        <a href="javascript:void(0)" class="btn btn-pills btn-soft-danger mt-2 mr-2">Danger</a>
                                        <a href="javascript:void(0)" class="btn btn-pills btn-soft-info mt-2 mr-2">Info</a>
                                        <a href="javascript:void(0)" class="btn btn-pills btn-soft-warning mt-2 mr-2">Warning</a>
                                        <a href="javascript:void(0)" class="btn btn-pills btn-soft-light mt-2 mr-2">Light</a>
                                        <a href="javascript:void(0)" class="btn btn-pills btn-soft-dark mt-2 mr-2">Dark</a>
                                    </div>
                                </div>
                            </div><!--end col-->
                            <!-- Buttons Pill End -->

                            <!-- Buttons Outline Start -->
                            <div class="col mt-4 pt-2">
                                <div class="component-wrapper rounded shadow">
                                    <div class="p-4 border-bottom">
                                        <h4 class="title mb-0">Buttons Outline</h4>
                                    </div>
        
                                    <div class="p-4">
                                        <h6 class="text-muted mb-2 pb-2">Ex. <code class="text-danger">&lt;a href="#" class="btn btn-outline-primary"&gt; Primary &lt;/a&gt;</code></h6>

                                        <a href="javascript:void(0)" class="btn btn-outline-primary mt-2 mr-2">Primary</a>
                                        <a href="javascript:void(0)" class="btn btn-outline-secondary mt-2 mr-2">Secondary</a>
                                        <a href="javascript:void(0)" class="btn btn-outline-success mt-2 mr-2">Success</a>
                                        <a href="javascript:void(0)" class="btn btn-outline-danger mt-2 mr-2">Danger</a>
                                        <a href="javascript:void(0)" class="btn btn-outline-info mt-2 mr-2">Info</a>
                                        <a href="javascript:void(0)" class="btn btn-outline-warning mt-2 mr-2">Warning</a>
                                        <a href="javascript:void(0)" class="btn btn-outline-light mt-2 mr-2">Light</a>
                                        <a href="javascript:void(0)" class="btn btn-outline-dark mt-2 mr-2">Dark</a>
                                    </div>
                                </div>
                            </div><!--end col-->
                            <!-- Buttons Outline End -->

                            <!-- Buttons Pill Outline Start -->
                            <div class="col mt-4 pt-2">
                                <div class="component-wrapper rounded shadow">
                                    <div class="p-4 border-bottom">
                                        <h4 class="title mb-0">Buttons Pill Outline</h4>
                                    </div>
        
                                    <div class="p-4">
                                        <h6 class="text-muted mb-2 pb-2">Ex. <code class="text-danger">&lt;a href="#" class="btn btn-outline-primary"&gt; Primary &lt;/a&gt;</code></h6>

                                        <a href="javascript:void(0)" class="btn btn-pills btn-outline-primary mt-2 mr-2">Primary</a>
                                        <a href="javascript:void(0)" class="btn btn-pills btn-outline-secondary mt-2 mr-2">Secondary</a>
                                        <a href="javascript:void(0)" class="btn btn-pills btn-outline-success mt-2 mr-2">Success</a>
                                        <a href="javascript:void(0)" class="btn btn-pills btn-outline-danger mt-2 mr-2">Danger</a>
                                        <a href="javascript:void(0)" class="btn btn-pills btn-outline-info mt-2 mr-2">Info</a>
                                        <a href="javascript:void(0)" class="btn btn-pills btn-outline-warning mt-2 mr-2">Warning</a>
                                        <a href="javascript:void(0)" class="btn btn-pills btn-outline-light mt-2 mr-2">Light</a>
                                        <a href="javascript:void(0)" class="btn btn-pills btn-outline-dark mt-2 mr-2">Dark</a>
                                    </div>
                                </div>
                            </div><!--end col-->
                            <!-- Buttons Pill Outline End -->

                            <!-- Button Icons Start -->
                            <div class="col mt-4 pt-2">
                                <div class="component-wrapper rounded shadow">
                                    <div class="p-4 border-bottom">
                                        <h4 class="title mb-0">Button Icons</h4>
                                    </div>
        
                                    <div class="p-4">
                                        <h6 class="text-muted mb-2 pb-2">Ex. <code class="text-danger">&lt;a href="#" class="btn btn-icon btn-primary"&gt;&lt;i data-feather="facebook" class="fea icon-sm"&gt;&lt;/i&gt;&lt;/a&gt;</code></h6>

                                        <a href="javascript:void(0)" class="btn btn-icon btn-primary mt-2"><i data-feather="facebook" class="icons"></i></a>
                                        <a href="javascript:void(0)" class="btn btn-icon btn-info mt-2"><i data-feather="twitter" class="icons"></i></a>
                                        <a href="javascript:void(0)" class="btn btn-icon btn-danger mt-2"><i data-feather="youtube" class="icons"></i></a>
                                        <a href="javascript:void(0)" class="btn btn-icon btn-success mt-2"><i data-feather="gitlab" class="icons"></i></a>
                                        <a href="javascript:void(0)" class="btn btn-icon btn-secondary mt-2"><i data-feather="linkedin" class="icons"></i></a>
                                        <a href="javascript:void(0)" class="btn btn-icon btn-warning mt-2"><i data-feather="github" class="icons"></i></a>
                                        <a href="javascript:void(0)" class="btn btn-icon btn-info mt-2"><i data-feather="star" class="icons"></i></a>
                                    </div>
                                </div>
                            </div><!--end col-->
                            <!-- Button Icons End -->

                            <!-- Outline Button Icons Start -->
                            <div class="col mt-4 pt-2">
                                <div class="component-wrapper rounded shadow">
                                    <div class="p-4 border-bottom">
                                        <h4 class="title mb-0">Outline Button Icons</h4>
                                    </div>
        
                                    <div class="p-4">
                                        <h6 class="text-muted mb-2 pb-2">Ex. <code class="text-danger">&lt;a href="#" class="btn btn-icon btn-outline-primary"&gt;&lt;i data-feather="facebook" class="fea icon-sm"&gt;&lt;/i&gt;&lt;/a&gt;</code></h6>

                                        <a href="javascript:void(0)" class="btn btn-icon btn-outline-primary mt-2"><i data-feather="facebook" class="icons"></i></a>
                                        <a href="javascript:void(0)" class="btn btn-icon btn-outline-info mt-2"><i data-feather="twitter" class="icons"></i></a>
                                        <a href="javascript:void(0)" class="btn btn-icon btn-outline-danger mt-2"><i data-feather="youtube" class="icons"></i></a>
                                        <a href="javascript:void(0)" class="btn btn-icon btn-outline-success mt-2"><i data-feather="gitlab" class="icons"></i></a>
                                        <a href="javascript:void(0)" class="btn btn-icon btn-outline-secondary mt-2"><i data-feather="linkedin" class="icons"></i></a>
                                        <a href="javascript:void(0)" class="btn btn-icon btn-outline-warning mt-2"><i data-feather="github" class="icons"></i></a>
                                    </div>
                                </div>
                            </div><!--end col-->
                            <!-- Outline Button Icons End -->

                            <!-- Button Pill Icons Start -->
                            <div class="col mt-4 pt-2">
                                <div class="component-wrapper rounded shadow">
                                    <div class="p-4 border-bottom">
                                        <h4 class="title mb-0">Button Pill Icons</h4>
                                    </div>
        
                                    <div class="p-4">
                                        <h6 class="text-muted mb-2 pb-2">Ex. <code class="text-danger">&lt;a href="#" class="btn btn-icon btn-pills btn-primary"&gt;&lt;i data-feather="facebook" class="fea icon-sm"&gt;&lt;/i&gt;&lt;/a&gt;</code></h6>

                                        <a href="javascript:void(0)" class="btn btn-icon btn-pills btn-primary mt-2"><i data-feather="facebook" class="icons"></i></a>
                                        <a href="javascript:void(0)" class="btn btn-icon btn-pills btn-info mt-2"><i data-feather="twitter" class="icons"></i></a>
                                        <a href="javascript:void(0)" class="btn btn-icon btn-pills btn-danger mt-2"><i data-feather="youtube" class="icons"></i></a>
                                        <a href="javascript:void(0)" class="btn btn-icon btn-pills btn-success mt-2"><i data-feather="gitlab" class="icons"></i></a>
                                        <a href="javascript:void(0)" class="btn btn-icon btn-pills btn-secondary mt-2"><i data-feather="linkedin" class="icons"></i></a>
                                        <a href="javascript:void(0)" class="btn btn-icon btn-pills btn-warning mt-2"><i data-feather="github" class="icons"></i></a>
                                        <a href="javascript:void(0)" class="btn btn-icon btn-pills btn-danger mt-2"><i data-feather="heart" class="icons"></i></a>
                                    </div>
                                </div>
                            </div><!--end col-->
                            <!-- Button Pill Icons End -->

                            <!-- Outline Button Pill Icons Start -->
                            <div class="col mt-4 pt-2">
                                <div class="component-wrapper rounded shadow">
                                    <div class="p-4 border-bottom">
                                        <h4 class="title mb-0">Outline Button Pill Icons</h4>
                                    </div>
        
                                    <div class="p-4">
                                        <h6 class="text-muted mb-2 pb-2">Ex. <code class="text-danger">&lt;a href="#" class="btn btn-icon btn-pills btn-outline-primary"&gt;&lt;i data-feather="facebook" class="fea icon-sm"&gt;&lt;/i&gt;&lt;/a&gt;</code></h6>

                                        <a href="javascript:void(0)" class="btn btn-icon btn-pills btn-outline-primary mt-2"><i data-feather="facebook" class="icons"></i></a>
                                        <a href="javascript:void(0)" class="btn btn-icon btn-pills btn-outline-info mt-2"><i data-feather="twitter" class="icons"></i></a>
                                        <a href="javascript:void(0)" class="btn btn-icon btn-pills btn-outline-danger mt-2"><i data-feather="youtube" class="icons"></i></a>
                                        <a href="javascript:void(0)" class="btn btn-icon btn-pills btn-outline-success mt-2"><i data-feather="gitlab" class="icons"></i></a>
                                        <a href="javascript:void(0)" class="btn btn-icon btn-pills btn-outline-secondary mt-2"><i data-feather="linkedin" class="icons"></i></a>
                                        <a href="javascript:void(0)" class="btn btn-icon btn-pills btn-outline-warning mt-2"><i data-feather="github" class="icons"></i></a>
                                    </div>
                                </div>
                            </div><!--end col-->
                            <!-- Outline Button Pill Icons End -->

                            <!-- Button Sizing Start -->
                            <div class="col mt-4 pt-2">
                                <div class="component-wrapper rounded shadow">
                                    <div class="p-4 border-bottom">
                                        <h4 class="title mb-0">Button Sizing</h4>
                                    </div>
        
                                    <div class="p-4">
                                        <h6 class="text-muted mb-2 pb-2">Ex. <code class="text-danger">&lt;a href="#" class="btn btn-primary btn-sm"&gt; Primary &lt;/a&gt;</code></h6>

                                        <a href="javascript:void(0)" class="btn btn-sm btn-primary mt-2 mr-2">Small</a>
                                        <a href="javascript:void(0)" class="btn btn-sm btn-pills btn-primary mt-2 mr-2">Small</a>
                                        <a href="javascript:void(0)" class="btn btn-sm btn-outline-primary mt-2 mr-2">Small</a>
                                        <a href="javascript:void(0)" class="btn btn-sm btn-pills btn-outline-primary mt-2 mr-2">Small</a>
                                        <a href="javascript:void(0)" class="btn btn-icon btn-sm btn-primary mt-2"><i data-feather="facebook" class="icons"></i></a>
                                        <a href="javascript:void(0)" class="btn btn-icon btn-sm btn-pills btn-primary mt-2"><i data-feather="facebook" class="icons"></i></a>
                                        <a href="javascript:void(0)" class="btn btn-icon btn-sm btn-outline-primary mt-2"><i data-feather="facebook" class="icons"></i></a>
                                        <a href="javascript:void(0)" class="btn btn-icon btn-sm btn-pills btn-outline-primary mt-2"><i data-feather="facebook" class="icons"></i></a>

                                        <h6 class="text-muted mb-2 mt-4 pb-2">Ex. <code class="text-danger">&lt;a href="#" class="btn btn-primary btn-lg"&gt; Primary &lt;/a&gt;</code></h6>

                                        <a href="javascript:void(0)" class="btn btn-lg btn-primary mt-2 mr-2">Large</a>
                                        <a href="javascript:void(0)" class="btn btn-lg btn-pills btn-primary mt-2 mr-2">Large</a>
                                        <a href="javascript:void(0)" class="btn btn-lg btn-outline-primary mt-2 mr-2">Large</a>
                                        <a href="javascript:void(0)" class="btn btn-lg btn-pills btn-outline-primary mt-2 mr-2">Large</a>
                                        <a href="javascript:void(0)" class="btn btn-icon btn-lg btn-primary mt-2"><i data-feather="facebook" class="icons"></i></a>
                                        <a href="javascript:void(0)" class="btn btn-icon btn-lg btn-pills btn-primary mt-2"><i data-feather="facebook" class="icons"></i></a>
                                        <a href="javascript:void(0)" class="btn btn-icon btn-lg btn-outline-primary mt-2"><i data-feather="facebook" class="icons"></i></a>
                                        <a href="javascript:void(0)" class="btn btn-icon btn-lg btn-pills btn-outline-primary mt-2"><i data-feather="facebook" class="icons"></i></a>
                                    </div>
                                </div>
                            </div><!--end col-->
                            <!-- Button Sizing End -->

                            <!-- Dropdown Start -->
                            <div class="col mt-4 pt-2" id="dropdowns">
                                <div class="component-wrapper rounded shadow">
                                    <div class="p-4 border-bottom">
                                        <h4 class="title mb-0"> Dropdown </h4>
                                    </div>
        
                                    <div class="p-4">
                                        <h6 class="text-muted mb-2 pb-2">Ex. <br> 
                                            <code class="text-danger">
                                                &lt;div class="btn-group dropdown-primary"&gt;<br>&nbsp;&nbsp;
                                                &lt;button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"&gt;<br>&nbsp;&nbsp;&nbsp;&nbsp;
                                                Primary<br>&nbsp;&nbsp;
                                                &lt;/button&gt;<br>&nbsp;&nbsp;
                                                &lt;div class="dropdown-menu"&gt;<br>&nbsp;&nbsp;&nbsp;&nbsp;
                                                &lt;a class="dropdown-item" href="#"&gt;Home&lt;/a&gt;<br>&nbsp;&nbsp;&nbsp;&nbsp;
                                                &lt;a class="dropdown-item" href="#"&gt;Services&lt;/a&gt;<br>&nbsp;&nbsp;&nbsp;&nbsp;
                                                &lt;a class="dropdown-item" href="#"&gt;About us&lt;/a&gt;<br>&nbsp;&nbsp;&nbsp;&nbsp;
                                                &lt;div class="dropdown-divider"&gt;&lt;/div&gt;<br>&nbsp;&nbsp;&nbsp;&nbsp;
                                                &lt;a class="dropdown-item" href="#"&gt;Contact us&lt;/a&gt;<br>&nbsp;&nbsp;
                                                &lt;/div&gt;<br>
                                                &lt;/div&gt;
                                            </code>
                                        </h6>

                                        <!-- Primary Dropdown -->
                                        <div class="btn-group dropdown-primary mr-2 mt-2">
                                            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Primary
                                            </button>
                                            <div class="dropdown-menu">
                                                <a href="javascript:void(0)" class="dropdown-item">Home</a>
                                                <a href="javascript:void(0)" class="dropdown-item">Services</a>
                                                <a href="javascript:void(0)" class="dropdown-item">About us</a>
                                                <div class="dropdown-divider"></div>
                                                <a href="javascript:void(0)" class="dropdown-item">Contact us</a>
                                            </div>
                                        </div>
                                        <!-- Primary Dropdown -->

                                        <!-- Secondary Dropdown -->
                                        <div class="btn-group dropdown-secondary mr-2 mt-2">
                                            <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Secondary
                                            </button>
                                            <div class="dropdown-menu">
                                                <a href="javascript:void(0)" class="dropdown-item">Home</a>
                                                <a href="javascript:void(0)" class="dropdown-item">Services</a>
                                                <a href="javascript:void(0)" class="dropdown-item">About us</a>
                                                <div class="dropdown-divider"></div>
                                                <a href="javascript:void(0)" class="dropdown-item">Contact us</a>
                                            </div>
                                        </div>
                                        <!-- Secondary Dropdown -->

                                        <!-- Success Dropdown -->
                                        <div class="btn-group dropdown-success mr-2 mt-2">
                                            <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Success
                                            </button>
                                            <div class="dropdown-menu">
                                                <a href="javascript:void(0)" class="dropdown-item">Home</a>
                                                <a href="javascript:void(0)" class="dropdown-item">Services</a>
                                                <a href="javascript:void(0)" class="dropdown-item">About us</a>
                                                <div class="dropdown-divider"></div>
                                                <a href="javascript:void(0)" class="dropdown-item">Contact us</a>
                                            </div>
                                        </div>
                                        <!-- Success Dropdown -->

                                        <!-- Warning Dropdown -->
                                        <div class="btn-group dropdown-warning mr-2 mt-2">
                                            <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Warning
                                            </button>
                                            <div class="dropdown-menu">
                                                <a href="javascript:void(0)" class="dropdown-item">Home</a>
                                                <a href="javascript:void(0)" class="dropdown-item">Services</a>
                                                <a href="javascript:void(0)" class="dropdown-item">About us</a>
                                                <div class="dropdown-divider"></div>
                                                <a href="javascript:void(0)" class="dropdown-item">Contact us</a>
                                            </div>
                                        </div>
                                        <!-- Warning Dropdown -->

                                        <!-- Info Dropdown -->
                                        <div class="btn-group dropdown-info mr-2 mt-2">
                                            <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Info
                                            </button>
                                            <div class="dropdown-menu">
                                                <a href="javascript:void(0)" class="dropdown-item">Home</a>
                                                <a href="javascript:void(0)" class="dropdown-item">Services</a>
                                                <a href="javascript:void(0)" class="dropdown-item">About us</a>
                                                <div class="dropdown-divider"></div>
                                                <a href="javascript:void(0)" class="dropdown-item">Contact us</a>
                                            </div>
                                        </div>
                                        <!-- Info Dropdown -->

                                        <!-- Danger Dropdown -->
                                        <div class="btn-group dropdown-danger mr-2 mt-2">
                                            <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Danger
                                            </button>
                                            <div class="dropdown-menu">
                                                <a href="javascript:void(0)" class="dropdown-item">Home</a>
                                                <a href="javascript:void(0)" class="dropdown-item">Services</a>
                                                <a href="javascript:void(0)" class="dropdown-item">About us</a>
                                                <div class="dropdown-divider"></div>
                                                <a href="javascript:void(0)" class="dropdown-item">Contact us</a>
                                            </div>
                                        </div>
                                        <!-- Danger Dropdown -->

                                        <!-- Dark Dropdown -->
                                        <div class="btn-group dropdown-dark mr-2 mt-2">
                                            <button type="button" class="btn btn-dark dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Dark
                                            </button>
                                            <div class="dropdown-menu">
                                                <a href="javascript:void(0)" class="dropdown-item">Home</a>
                                                <a href="javascript:void(0)" class="dropdown-item">Services</a>
                                                <a href="javascript:void(0)" class="dropdown-item">About us</a>
                                                <div class="dropdown-divider"></div>
                                                <a href="javascript:void(0)" class="dropdown-item">Contact us</a>
                                            </div>
                                        </div>
                                        <!-- Dark Dropdown -->
                                    </div>
                                </div>
                            </div><!--end col-->
                            <!-- Dropdown End -->

                            <!-- Badges Start -->
                            <div class="col mt-4 pt-2" id="badges">
                                <div class="component-wrapper rounded shadow">
                                    <div class="p-4 border-bottom">
                                        <h4 class="title mb-0"> Badges </h4>
                                    </div>
        
                                    <div class="p-4">
                                        <h6 class="text-muted mb-2 pb-2">Ex. <code class="text-danger">&lt;span class="badge badge-primary"&gt; primary &lt;/span&gt;</code></h6>

                                        <span class="badge badge-primary mr-2 mt-2">Primary</span>
                                        <span class="badge badge-secondary mr-2 mt-2">Secondary</span>
                                        <span class="badge badge-success mr-2 mt-2">Success</span>
                                        <span class="badge badge-danger mr-2 mt-2">Danger</span>
                                        <span class="badge badge-warning mr-2 mt-2">Warning</span>
                                        <span class="badge badge-info mr-2 mt-2">Info</span>
                                        <span class="badge badge-light mr-2 mt-2">Light</span>
                                        <span class="badge badge-dark mr-2 mt-2">Dark</span>
                                    </div>
                                </div>
                            </div><!--end col-->
                            <!-- Badges End -->

                            <!-- Pill Badges Start -->
                            <div class="col mt-4 pt-2">
                                <div class="component-wrapper rounded shadow">
                                    <div class="p-4 border-bottom">
                                        <h4 class="title mb-0"> Pill Badges </h4>
                                    </div>
        
                                    <div class="p-4">
                                        <h6 class="text-muted mb-2 pb-2">Ex. <code class="text-danger">&lt;span class="badge badge-pill badge-primary"&gt; primary &lt;/span&gt;</code></h6>

                                        <span class="badge badge-pill badge-primary mr-2 mt-2">Primary</span>
                                        <span class="badge badge-pill badge-secondary mr-2 mt-2">Secondary</span>
                                        <span class="badge badge-pill badge-success mr-2 mt-2">Success</span>
                                        <span class="badge badge-pill badge-danger mr-2 mt-2">Danger</span>
                                        <span class="badge badge-pill badge-warning mr-2 mt-2">Warning</span>
                                        <span class="badge badge-pill badge-info mr-2 mt-2">Info</span>
                                        <span class="badge badge-pill badge-light mr-2 mt-2">Light</span>
                                        <span class="badge badge-pill badge-dark mr-2 mt-2">Dark</span>
                                    </div>
                                </div>
                            </div><!--end col-->
                            <!-- Pill Badges End -->

                            <!-- Badges Start -->
                            <div class="col mt-4 pt-2" id="badges">
                                <div class="component-wrapper rounded shadow">
                                    <div class="p-4 border-bottom">
                                        <h4 class="title mb-0">Soft Badges </h4>
                                    </div>
        
                                    <div class="p-4">
                                        <h6 class="text-muted mb-2 pb-2">Ex. <code class="text-danger">&lt;span class="badge badge-soft-primary"&gt; primary &lt;/span&gt;</code></h6>

                                        <span class="badge badge-soft-primary mr-2 mt-2">Primary</span>
                                        <span class="badge badge-soft-secondary mr-2 mt-2">Secondary</span>
                                        <span class="badge badge-soft-success mr-2 mt-2">Success</span>
                                        <span class="badge badge-soft-danger mr-2 mt-2">Danger</span>
                                        <span class="badge badge-soft-warning mr-2 mt-2">Warning</span>
                                        <span class="badge badge-soft-info mr-2 mt-2">Info</span>
                                        <span class="badge badge-soft-light mr-2 mt-2">Light</span>
                                        <span class="badge badge-soft-dark mr-2 mt-2">Dark</span>
                                    </div>
                                </div>
                            </div><!--end col-->
                            <!-- Badges End -->

                            <!-- Pill Badges Start -->
                            <div class="col mt-4 pt-2">
                                <div class="component-wrapper rounded shadow">
                                    <div class="p-4 border-bottom">
                                        <h4 class="title mb-0">Soft Pill Badges </h4>
                                    </div>
        
                                    <div class="p-4">
                                        <h6 class="text-muted mb-2 pb-2">Ex. <code class="text-danger">&lt;span class="badge badge-pill badge-soft-primary"&gt; primary &lt;/span&gt;</code></h6>

                                        <span class="badge badge-pill badge-soft-primary mr-2 mt-2">Primary</span>
                                        <span class="badge badge-pill badge-soft-secondary mr-2 mt-2">Secondary</span>
                                        <span class="badge badge-pill badge-soft-success mr-2 mt-2">Success</span>
                                        <span class="badge badge-pill badge-soft-danger mr-2 mt-2">Danger</span>
                                        <span class="badge badge-pill badge-soft-warning mr-2 mt-2">Warning</span>
                                        <span class="badge badge-pill badge-soft-info mr-2 mt-2">Info</span>
                                        <span class="badge badge-pill badge-soft-light mr-2 mt-2">Light</span>
                                        <span class="badge badge-pill badge-soft-dark mr-2 mt-2">Dark</span>
                                    </div>
                                </div>
                            </div><!--end col-->
                            <!-- Pill Badges End -->

                            <!-- Outline Badges Start -->
                            <div class="col mt-4 pt-2">
                                <div class="component-wrapper rounded shadow">
                                    <div class="p-4 border-bottom">
                                        <h4 class="title mb-0"> Outline Badges </h4>
                                    </div>
        
                                    <div class="p-4">
                                        <h6 class="text-muted mb-2 pb-2">Ex. <code class="text-danger">&lt;span class="badge badge-pill badge-outline-primary"&gt; primary &lt;/span&gt;</code></h6>

                                        <span class="badge badge-pill badge-outline-primary mr-2 mt-2">Primary</span>
                                        <span class="badge badge-pill badge-outline-secondary mr-2 mt-2">Secondary</span>
                                        <span class="badge badge-pill badge-outline-success mr-2 mt-2">Success</span>
                                        <span class="badge badge-pill badge-outline-danger mr-2 mt-2">Danger</span>
                                        <span class="badge badge-pill badge-outline-warning mr-2 mt-2">Warning</span>
                                        <span class="badge badge-pill badge-outline-info mr-2 mt-2">Info</span>
                                        <span class="badge badge-pill badge-outline-light mr-2 mt-2">Light</span>
                                        <span class="badge badge-pill badge-outline-dark mr-2 mt-2">Dark</span>
                                    </div>
                                </div>
                            </div><!--end col-->
                            <!-- Outline Badges End -->

                            <!-- Link Badges Start -->
                            <div class="col mt-4 pt-2">
                                <div class="component-wrapper rounded shadow">
                                    <div class="p-4 border-bottom">
                                        <h4 class="title mb-0"> Link Badges </h4>
                                    </div>
        
                                    <div class="p-4">
                                        <h6 class="text-muted mb-2 pb-2">Ex. <code class="text-danger">&lt;a href="#" class="badge badge-primary"&gt; primary &lt;/a&gt;</code></h6>

                                        <a href="javascript:void(0)" class="badge badge-primary mr-2 mt-2">Primary</a>
                                        <a href="javascript:void(0)" class="badge badge-secondary mr-2 mt-2">Secondary</a>
                                        <a href="javascript:void(0)" class="badge badge-success mr-2 mt-2">Success</a>
                                        <a href="javascript:void(0)" class="badge badge-danger mr-2 mt-2">Danger</a>
                                        <a href="javascript:void(0)" class="badge badge-warning mr-2 mt-2">Warning</a>
                                        <a href="javascript:void(0)" class="badge badge-info mr-2 mt-2">Info</a>
                                        <a href="javascript:void(0)" class="badge badge-light mr-2 mt-2">Light</a>
                                        <a href="javascript:void(0)" class="badge badge-dark mr-2 mt-2">Dark</a>
                                    </div>
                                </div>
                            </div><!--end col-->
                            <!-- Link Badges End -->

                            <!-- Alert Start -->
                            <div class="col mt-4 pt-2" id="alerts">
                                <div class="component-wrapper rounded shadow">
                                    <div class="p-4 border-bottom">
                                        <h4 class="title mb-0"> Alert </h4>
                                    </div>
        
                                    <div class="p-4">
                                        <h6 class="text-muted mb-4 pb-2">Ex. <code class="text-danger">&lt;div class="alert alert-primary" role="alert"&gt; A simple primary alert—check it out! &lt;/div&gt;</code></h6>

                                        <div class="alert alert-primary" role="alert"> A simple primary alert—check it out!</div>
                                        <div class="alert alert-secondary" role="alert"> A simple secondary alert—check it out!</div>
                                        <div class="alert alert-success" role="alert"> A simple success alert—check it out!</div>
                                        <div class="alert alert-danger" role="alert"> A simple danger alert—check it out!</div>
                                        <div class="alert alert-warning" role="alert"> A simple warning alert—check it out!</div>
                                        <div class="alert alert-info" role="alert"> A simple info alert—check it out!</div>
                                        <div class="alert alert-light" role="alert"> A simple light alert—check it out!</div>
                                        <div class="alert alert-dark mb-0" role="alert"> A simple dark alert—check it out!</div>
                                    </div>
                                </div>
                            </div><!--end col-->
                            <!-- Alert End -->

                            <!-- Alert Links Start -->
                            <div class="col mt-4 pt-2">
                                <div class="component-wrapper rounded shadow">
                                    <div class="p-4 border-bottom">
                                        <h4 class="title mb-0"> Alert Links </h4>
                                    </div>
        
                                    <div class="p-4">
                                        <h6 class="text-muted mb-4 pb-2">Ex. <code class="text-danger">&lt;div class="alert alert-primary" role="alert"&gt; A simple primary alert with &lt;a href="#" class="alert-link"&gt;&lt;/a&gt;. &lt;/div&gt;</code></h6>

                                        <div class="alert alert-primary" role="alert">A simple primary alert with <a href="javascript:void(0)" class="alert-link">an link</a>.</div>
                                        <div class="alert alert-secondary" role="alert">A simple secondary alert with <a href="javascript:void(0)" class="alert-link">an link</a>.</div>
                                        <div class="alert alert-success" role="alert">A simple success alert with <a href="javascript:void(0)" class="alert-link">an link</a>.</div>
                                        <div class="alert alert-danger" role="alert">A simple danger alert with <a href="javascript:void(0)" class="alert-link">an link</a>.</div>
                                        <div class="alert alert-warning" role="alert">A simple warning alert with <a href="javascript:void(0)" class="alert-link">an link</a>.</div>
                                        <div class="alert alert-info" role="alert">A simple info alert with <a href="javascript:void(0)" class="alert-link">an link</a>.</div>
                                        <div class="alert alert-light" role="alert">A simple light alert with <a href="javascript:void(0)" class="alert-link">an link</a>.</div>
                                        <div class="alert alert-dark mb-0" role="alert">A simple dark alert with <a href="javascript:void(0)" class="alert-link">an link</a>.</div>
                                    </div>
                                </div>
                            </div><!--end col-->
                            <!-- Alert Links End -->

                            <!-- Additional Content Start -->
                            <div class="col mt-4 pt-2">
                                <div class="component-wrapper rounded shadow">
                                    <div class="p-4 border-bottom">
                                        <h4 class="title mb-0"> Additional Content </h4>
                                    </div>

                                    <div class="p-4">
                                        <div class="alert alert-success mb-0" role="alert">
                                            <h4 class="alert-heading">Well done!</h4>
                                            <p>Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.</p>
                                            <p class="mb-0 border-top pt-3">Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p>
                                        </div>
                                    </div>
                                </div>
                            </div><!--end col-->
                            <!-- Additional Content End -->

                            <!-- Dismissing Alert Start -->
                            <div class="col mt-4 pt-2">
                                <div class="component-wrapper rounded shadow">
                                    <div class="p-4 border-bottom">
                                        <h4 class="title mb-0"> Dismissing Alert </h4>
                                    </div>

                                    <div class="p-4">
                                        <h6 class="text-muted mb-4 pb-2">Ex. <br> 
                                            <code class="text-danger">
                                                &lt;div class="alert alert-success alert-dismissible fade show" role="alert"&gt; <br>&nbsp; 
                                                &lt;strong&gt;Well done!&lt;/strong&gt; You successfully read this important alert message. <br>&nbsp;    
                                                &lt;button type="button" class="close" data-dismiss="alert" aria-label="Close"&gt; <br>&nbsp;&nbsp;&nbsp;&nbsp; 
                                                &lt;span aria-hidden="true"&gt; &times; &lt;/span&gt; <br>&nbsp;
                                                &lt;/button&gt; <br>
                                                &lt;/div&gt; 
                                            </code>
                                        </h6>
                                            
                                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                                            <strong>Well done!</strong> You successfully read this important alert message.
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>

                                        <div class="alert alert-info alert-dismissible fade show" role="alert">
                                            <strong>Heads up!</strong> This alert needs your attention, but it's not super important.
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>

                                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                            <strong>Warning!</strong> Better check yourself, you're not looking too good.
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>

                                        <div class="alert alert-danger alert-dismissible fade show mb-0" role="alert">
                                            <strong>Oh snap! </strong> Change a few things up and try submitting again.
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div><!--end col-->
                            <!-- Dismissing Alert End -->

                            <!-- Advanced Alert Start -->
                            <div class="col mt-4 pt-2">
                                <div class="component-wrapper rounded shadow">
                                    <div class="p-4 border-bottom">
                                        <h4 class="title mb-0"> Advanced Alert </h4>
                                    </div>

                                    <div class="p-4">
                                        <h6 class="text-muted mb-4 pb-2">Ex. <br>
                                            <code class="text-danger">&lt;div class="alert alert-primary alert-pills" role="alert"&gt; <br>&nbsp;&nbsp;
                                                &lt;span class="badge badge-pill badge-danger"&gt; New &lt;/span&gt; <br>&nbsp;&nbsp;
                                                &lt;span class="alert-content"&gt; A Modern primary alert—check it out! &lt;/span&gt; <br>
                                                &lt;/div&gt;
                                            </code>
                                        </h6>

                                        <div class="d-block">
                                            <div class="alert alert-primary alert-pills" role="alert">
                                                <span class="badge badge-pill badge-info mr-1">New</span>
                                                <span class="content"> A Modern primary alert—check it out! <i class="mdi mdi-chevron-right"></i></span>
                                            </div>
                                        </div>
    
                                        <div class="d-block">
                                            <div class="alert alert-danger alert-pills mb-0" role="alert">
                                                <span class="badge badge-pill badge-success mr-1"> New </span>
                                                <span class="content"> A Modern danger alert—check it out! <i class="mdi mdi-chevron-right"></i> </span> 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!--end col-->
                            <!-- Advanced Alert End -->

                            <!-- Advanced Outline Alert Start -->
                            <div class="col mt-4 pt-2">
                                <div class="component-wrapper rounded shadow">
                                    <div class="p-4 border-bottom">
                                        <h4 class="title mb-0"> Advanced Outline Alert </h4>
                                    </div>

                                    <div class="p-4">
                                        <h6 class="text-muted mb-4 pb-2">Ex. <br> 
                                            <code class="text-danger">
                                                &lt;div class="alert alert-outline-primary alert-pills" role="alert"&gt; <br>&nbsp;&nbsp;
                                                &lt;span class="badge badge-pill badge-danger"&gt; New &lt;/span&gt; <br>&nbsp;&nbsp;
                                                &lt;span class="alert-content"&gt; A Modern primary alert—check it out! &lt;/span&gt; <br>
                                                &lt;/div&gt;
                                            </code>
                                        </h6>

                                        <div class="d-block">
                                            <div class="alert alert-outline-primary alert-pills" role="alert">
                                                <span class="badge badge-pill badge-primary mr-1">New</span>
                                                <span class="content"> A Modern primary alert—check it out! <i class="mdi mdi-chevron-right"></i></span>
                                            </div>
                                        </div>
    
                                        <div class="d-block">
                                            <div class="alert alert-outline-danger alert-pills mb-0" role="alert">
                                                <span class="badge badge-pill badge-danger mr-1"> New </span>
                                                <span class="content"> A Modern danger alert—check it out! <i class="mdi mdi-chevron-right"></i> </span> 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!--end col-->
                            <!-- Advanced Outline Alert End -->

                            <!-- Accordions Start -->
                            <div class="col mt-4 pt-2" id="accordions">
                                <div class="component-wrapper rounded shadow">
                                    <div class="p-4 border-bottom">
                                        <h4 class="title mb-0">Accordions</h4>
                                    </div>
        
                                    <div class="p-4">
                                        <div class="faq-content">
                                            <div class="accordion" id="accordionExample">
                                                <div class="card border-0 rounded mb-2">
                                                    <a data-toggle="collapse" href="#collapseone" class="faq position-relative" aria-expanded="true" aria-controls="collapseone">
                                                        <div class="card-header border-0 bg-light p-3 pr-5" id="headingfifone">
                                                            <h6 class="title mb-0"> Accordion #1 </h6>
                                                        </div>
                                                    </a>
                                                    <div id="collapseone" class="collapse show" aria-labelledby="headingfifone" data-parent="#accordionExample">
                                                        <div class="card-body px-2 py-4">
                                                            <p class="text-muted mb-0 faq-ans">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.</p>
                                                        </div>
                                                    </div>
                                                </div>
                
                                                <div class="card border-0 rounded mb-2">
                                                    <a data-toggle="collapse" href="#collapsetwo" class="faq position-relative collapsed" aria-expanded="false" aria-controls="collapsetwo">
                                                        <div class="card-header border-0 bg-light p-3 pr-5" id="headingtwo">
                                                            <h6 class="title mb-0"> Accordion #2 </h6>
                                                        </div>
                                                    </a>
                                                    <div id="collapsetwo" class="collapse" aria-labelledby="headingtwo" data-parent="#accordionExample">
                                                        <div class="card-body px-2 py-4">
                                                            <p class="text-muted mb-0 faq-ans">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.</p>
                                                        </div>
                                                    </div>
                                                </div>
                
                                                <div class="card border-0 rounded mb-2">
                                                    <a data-toggle="collapse" href="#collapsethree" class="faq position-relative collapsed" aria-expanded="false" aria-controls="collapsethree">
                                                        <div class="card-header border-0 bg-light p-3 pr-5" id="headingthree">
                                                            <h6 class="title mb-0"> Accordion #3 </h6>
                                                        </div>
                                                    </a>
                                                    <div id="collapsethree" class="collapse" aria-labelledby="headingthree" data-parent="#accordionExample">
                                                        <div class="card-body px-2 py-4">
                                                            <p class="text-muted mb-0 faq-ans">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!--end col-->
                            <!-- Accordions End -->

                            <!-- Card Start -->
                            <div class="col mt-4 pt-2" id="cards">
                                <div class="component-wrapper rounded shadow">
                                    <div class="p-4 border-bottom">
                                        <h4 class="title mb-0"> Cards </h4>
                                    </div>
        
                                    <div class="p-4">
                                        <h6 class="text-muted pb-2">Vertical Card<br> 
                                            <code class="text-danger">
                                                &lt;div class="card shadow rounded border-0 overflow-hidden&gt; <br>&nbsp;&nbsp;
                                                &lt;img src="images/blog/01.jpg" class="img-fluid" alt="&gt; <br>&nbsp;&nbsp;
                                                &lt;div class="card-body"&gt; <br>&nbsp;&nbsp;&nbsp;&nbsp;
                                                &lt;h5 class="card-title"&gt;Saas & Software : Landrick&lt;/h5&gt; <br>&nbsp;&nbsp;&nbsp;&nbsp;
                                                &lt;p class="text-muted mb-0"&gt;Due to its widespread use as filler text for layouts, non-readability is of great importance&lt;/p&gt; <br>&nbsp;&nbsp;
                                                &lt;/div&gt; <br>
                                                &lt;/div&gt;
                                            </code>
                                        </h6>

                                        <div class="row">
                                            <div class="col-lg-6 col-12 mt-4 pt-2">
                                                <div class="card shadow rounded border-0 overflow-hidden">
                                                    <img src="images/blog/01.jpg" class="img-fluid" alt="">
                                                    <div class="card-body">
                                                        <h5 class="card-title">Saas & Software : Landrick</h5>
                                                        <p class="text-muted">Due to its widespread use as filler text for layouts, non-readability is of great importance</p>
                                                        <a href="javascript:void(0)" class="text-primary">Read More <i data-feather="chevron-right" class="fea icon-sm"></i></a>
                                                    </div>
                                                </div>
                                            </div><!--end col-->

                                            <div class="col-lg-6 col-12 mt-4 pt-2">
                                                <div class="card shadow rounded border-0 overflow-hidden">
                                                    <div class="card-body">
                                                        <h5 class="card-title">Saas & Software : Landrick</h5>
                                                        <p class="text-muted">Due to its widespread use as filler text for layouts, non-readability is of great importance</p>
                                                        <a href="javascript:void(0)" class="text-primary">Read More <i data-feather="chevron-right" class="fea icon-sm"></i></a>
                                                    </div>
                                                    <img src="images/blog/01.jpg" class="img-fluid" alt="">
                                                </div>
                                            </div><!--end col-->
                                        </div>

                                        <div class="mt-4 pt-4 border-top">
                                            <h6 class="text-muted pb-2">Horizontal Card<br> 
                                                <code class="text-danger">
                                                    &lt;div class="card shadow rounded border-0 overflow-hidden&gt; <br>&nbsp;&nbsp;
                                                    &lt;img src="images/blog/01.jpg" class="img-fluid" alt="&gt; <br>&nbsp;&nbsp;
                                                    &lt;div class="card-body"&gt; <br>&nbsp;&nbsp;&nbsp;&nbsp;
                                                    &lt;h5 class="card-title"&gt;Saas & Software : Landrick&lt;/h5&gt; <br>&nbsp;&nbsp;&nbsp;&nbsp;
                                                    &lt;p class="text-muted mb-0"&gt;Due to its widespread use as filler text for layouts, non-readability is of great importance&lt;/p&gt; <br>&nbsp;&nbsp;
                                                    &lt;/div&gt; <br>
                                                    &lt;/div&gt;
                                                </code>
                                            </h6>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12 mt-4 pt-2">
                                                <div class="card shadow rounded border-0 overflow-hidden">
                                                    <div class="row no-gutters">
                                                        <div class="col-md-5">
                                                            <img src="images/work/14.jpg" class="img-fluid" alt="...">
                                                        </div>
                                                        <div class="col-md-7">
                                                            <div class="card-body">
                                                                <h5 class="card-title">Saas & Software : Landrick</h5>
                                                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!--end col-->
                                        </div><!--end row-->
                                    </div>
                                </div>
                            </div><!--end col-->
                            <!-- Card End -->

                            <!-- Forms Start -->
                            <div class="col mt-4 pt-2" id="forms">
                                <div class="component-wrapper rounded shadow">
                                    <div class="p-4 border-bottom">
                                        <h4 class="title mb-0"> Forms </h4>
                                    </div>
        
                                    <div class="p-4">
                                        <form>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Your Name <span class="text-danger">*</span></label>
                                                        <div class="position-relative">
                                                            <i data-feather="user" class="fea icon-sm icons"></i>
                                                            <input name="name" id="name" type="text" class="form-control pl-5" placeholder="First Name :">
                                                        </div>
                                                    </div>
                                                </div><!--end col-->
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Your Email <span class="text-danger">*</span></label>
                                                        <div class="position-relative">
                                                            <i data-feather="mail" class="fea icon-sm icons"></i>
                                                            <input name="email" id="email" type="email" class="form-control pl-5" placeholder="Your email :">
                                                        </div>
                                                    </div> 
                                                </div><!--end col-->
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label>Subject</label>
                                                        <div class="position-relative">
                                                            <i data-feather="book" class="fea icon-sm icons"></i>
                                                            <input name="subject" id="subject" class="form-control pl-5" placeholder="Your subject :">
                                                        </div>
                                                    </div>                                                                               
                                                </div><!--end col-->
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label>Comments</label>
                                                        <div class="position-relative">
                                                            <i data-feather="message-circle" class="fea icon-sm icons"></i>
                                                            <textarea name="comments" id="comments" rows="4" class="form-control pl-5" placeholder="Your Message :"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!--end row-->
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <input type="submit" id="submit" name="send" class="btn btn-primary" value="Send Message">
                                                </div><!--end col-->
                                            </div><!--end row-->
                                        </form><!--end form-->
                                    </div>
                                </div>
                            </div><!--end col-->
                            <!-- Forms End -->

                            <!-- Checkboxes Start -->
                            <div class="col mt-4 pt-2" id="checkboxes">
                                <div class="component-wrapper rounded shadow">
                                    <div class="p-4 border-bottom">
                                        <h4 class="title mb-0"> Checkboxes </h4>
                                    </div>

                                    <div class="p-4">
                                        <div class="form-check form-check-inline">
                                            <div class="form-group mb-0">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                                    <label class="custom-control-label" for="customCheck1">One</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-check form-check-inline">
                                            <div class="form-group mb-0">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="customCheck2">
                                                    <label class="custom-control-label" for="customCheck2">Two</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-check form-check-inline">
                                            <div class="form-group mb-0">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" disabled id="customCheck3">
                                                    <label class="custom-control-label" for="customCheck3">Disabled</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!--end col-->
                            <!-- Checkboxes End -->

                            <!-- Radio Buttons Start -->
                            <div class="col mt-4 pt-2" id="radio-buttons">
                                <div class="component-wrapper rounded shadow">
                                    <div class="p-4 border-bottom">
                                        <h4 class="title mb-0"> Radio Buttons </h4>
                                    </div>

                                    <div class="p-4">
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <div class="form-group mb-0">
                                                <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
                                                <label class="custom-control-label" for="customRadio1">Yes</label>
                                            </div>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <div class="form-group mb-0">
                                                <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                                                <label class="custom-control-label" for="customRadio2">No</label>
                                            </div>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <div class="form-group mb-0">
                                                <input type="radio" id="customRadio3" name="customRadio" disabled class="custom-control-input">
                                                <label class="custom-control-label" for="customRadio3">Disabled</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!--end col-->
                            <!-- Radio Buttons End -->

                            <!-- Switches Button Start -->
                            <div class="col mt-4 pt-2" id="switches">
                                <div class="component-wrapper rounded shadow">
                                    <div class="p-4 border-bottom">
                                        <h4 class="title mb-0"> Switches Button </h4>
                                    </div>

                                    <div class="p-4">
                                        <div class="custom-control custom-switch">
                                            <div class="form-group mb-0">
                                                <input type="checkbox" class="custom-control-input" id="customSwitch1">
                                                <label class="custom-control-label" for="customSwitch1">Toggle this switch element</label>
                                            </div>
                                        </div>
                                        <div class="custom-control custom-switch">
                                            <div class="form-group mb-0">
                                                <input type="checkbox" class="custom-control-input" disabled id="customSwitch2">
                                                <label class="custom-control-label" for="customSwitch2">Disabled switch element</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!--end col-->
                            <!-- Switches Button End -->

                            <!-- Select Box Start -->
                            <div class="col mt-4 pt-2" id="select-box">
                                <div class="component-wrapper rounded shadow">
                                    <div class="p-4 border-bottom">
                                        <h4 class="title mb-0"> Form Select Box </h4>
                                    </div>

                                    <div class="p-4">
                                        <div class="form-group mb-0">
                                            <select class="form-control custom-select">
                                                <option selected="">Location</option>
                                                <option value="AF">Afghanistan</option>
                                                <option value="AX">&Aring;land Islands</option>
                                                <option value="AL">Albania</option>
                                                <option value="DZ">Algeria</option>
                                                <option value="AS">American Samoa</option>
                                                <option value="AD">Andorra</option>
                                                <option value="AO">Angola</option>
                                                <option value="AI">Anguilla</option>
                                                <option value="AQ">Antarctica</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div><!--end col-->
                            <!-- Select Box End -->

                            <!-- Subscribe Form Start -->
                            <div class="col mt-4 pt-2" id="subscribe-forms">
                                <div class="component-wrapper rounded shadow">
                                    <div class="p-4 border-bottom">
                                        <h4 class="title mb-0"> Subscribe Form </h4>
                                    </div>
        
                                    <div class="p-4">
                                        <form>
                                            <div class="form-group mb-0 position-relative">
                                                <div class="input-group">
                                                    <input name="email" id="email2" type="email" class="form-control" placeholder="Your email :" required aria-describedby="newssubscribebtn">
                                                    <div class="input-group-append">
                                                        <button class="btn btn-primary submitBnt" type="submit" id="newssubscribebtn">Subscribe</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form><!--end form-->
                                    </div>
                                </div>
                            </div><!--end col-->
                            <!-- Subscribe Form End -->
                            
                            <!-- Google Map Start -->
                            <div class="col mt-4 pt-2" id="map">
                                <div class="component-wrapper rounded shadow">
                                    <div class="p-4 border-bottom">
                                        <h4 class="title mb-0"> Google Map </h4>
                                    </div>
        
                                    <div class="p-4">
                                        <div class="map">
                                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d39206.002432144705!2d-95.4973981212445!3d29.709510002925988!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8640c16de81f3ca5%3A0xf43e0b60ae539ac9!2sGerald+D.+Hines+Waterwall+Park!5e0!3m2!1sen!2sin!4v1566305861440!5m2!1sen!2sin" style="border:0" class="rounded" allowfullscreen></iframe>
                                        </div>
                                    </div>
                                </div>
                            </div><!--end col-->
                            <!-- Google Map End -->

                            <!-- Breadcrumb Start -->
                            <div class="col mt-4 pt-2" id="breadcrumbs">
                                <div class="component-wrapper rounded shadow">
                                    <div class="p-4 border-bottom">
                                        <h4 class="title mb-0"> Breadcrumb </h4>
                                    </div>
        
                                    <div class="p-4">
                                        <h6 class="text-muted mb-4 pb-2">Ex. <br> 
                                            <code class="text-danger">
                                                &lt;nav aria-label="breadcrumb" class="d-inline-block"&gt; 
                                            <br> &nbsp; &lt;ul class="breadcrumb bg-white rounded shadow mb-0"&gt; 
                                            <br> &nbsp; &nbsp; &lt;li class="breadcrumb-item"&gt;&lt;a href="#"&gt;Home&lt;/a&gt;&lt;/li&gt; 
                                            <br> &nbsp; &nbsp; &lt;li class="breadcrumb-item"&gt;&lt;a href="#"&gt;Pages&lt;/a&gt;&lt;/lt&gt; 
                                            <br> &nbsp; &nbsp; &lt;li class="breadcrumb-item active" aria-current="page"&gt;Components&lt;/li&gt; 
                                            <br> &nbsp; &lt;/ul&gt; 
                                            <br> &lt;/div&gt;</code>
                                        </h6>

                                        <nav aria-label="breadcrumb" class="d-inline-block">
                                            <ul class="breadcrumb bg-white rounded shadow mb-0">
                                                <li class="breadcrumb-item"><a href="index.html">Landrick</a></li>
                                                <li class="breadcrumb-item"><a href="#">Docs</a></li>
                                                <li class="breadcrumb-item active" aria-current="page">Components</li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div><!--end col-->
                            <!-- Breadcrumb End -->

                            <!-- Pagination Start -->
                            <div class="col mt-4 pt-2" id="pagination">
                                <div class="component-wrapper rounded shadow">
                                    <div class="p-4 border-bottom">
                                        <h4 class="title mb-0"> Pagination </h4>
                                    </div>
        
                                    <div class="p-4">
                                        <h6 class="text-muted mb-4 pb-2">Ex. <br>
                                            <code class="text-danger">
                                                &lt;ul class="pagination mb-0"&gt;<br>&nbsp;&nbsp;
                                                &lt;li class="page-item"&gt;&lt;a class="page-link" href="javascript:void(0)" aria-label="Previous"&gt;Prev&lt;/a&gt;&lt;/li&gt;<br>&nbsp;&nbsp;
                                                &lt;li class="page-item active"&gt;&lt;a class="page-link" href="#"&gt;1&lt;/a&gt;&lt;/li&gt;<br>&nbsp;&nbsp;
                                                &lt;li class="page-item"&gt;&lt;a class="page-link" href="#"&gt;2&lt;/a&gt;&lt;/li&gt;<br>&nbsp;&nbsp;
                                                &lt;li class="page-item"&gt;&lt;a class="page-link" href="#"&gt;3&lt;/a&gt;&lt;/li&gt;<br>&nbsp;&nbsp;
                                                &lt;li class="page-item"&gt;&lt;a class="page-link" href="#" aria-label="Next"&gt;Next&lt;/a&gt;&lt;/li&gt;<br>
                                                &lt;/ul&gt;<br>
                                            </code>
                                        </h6>
                                        
                                        <ul class="pagination mb-0">
                                            <li class="page-item"><a class="page-link" href="javascript:void(0)" aria-label="Previous">Prev</a></li>
                                            <li class="page-item active"><a class="page-link" href="javascript:void(0)">1</a></li>
                                            <li class="page-item"><a class="page-link" href="javascript:void(0)">2</a></li>
                                            <li class="page-item"><a class="page-link" href="javascript:void(0)">3</a></li>
                                            <li class="page-item"><a class="page-link" href="javascript:void(0)" aria-label="Next">Next</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div><!--end col-->
                            <!-- Pagination End -->

                            <!-- Default Avatars Start -->
                            <div class="col mt-4 pt-2" id="avatar">
                                <div class="component-wrapper rounded shadow">
                                    <div class="p-4 border-bottom">
                                        <h4 class="title mb-0"> Default Avatars </h4>
                                    </div>
        
                                    <div class="p-4">
                                        <h6 class="text-muted mb-4 pb-2">Ex. <code class="text-danger">&lt;img src="images/home/01.jpg" class="img-fluid avatar avatar-ex-sm rounded"&gt;</code></h6>
                                        
                                        <img src="images/client/05.jpg" class="img-fluid avatar avatar-ex-sm mr-2 rounded" alt="">
                                        <img src="images/client/05.jpg" class="img-fluid avatar avatar-md-sm mr-2 rounded" alt="">
                                        <img src="images/client/05.jpg" class="img-fluid avatar avatar-small mr-2 rounded" alt="">
                                        <img src="images/client/05.jpg" class="img-fluid avatar avatar-medium mr-2 rounded" alt="">
                                        <img src="images/client/05.jpg" class="img-fluid avatar avatar-large mt-3 mt-sm-0 mr-2 rounded" alt="">
                                    </div>
                                </div>
                            </div><!--end col-->
                            <!-- Default Avatars End -->

                            <!-- Circle Avatars Start -->
                            <div class="col mt-4 pt-2">
                                <div class="component-wrapper rounded shadow">
                                    <div class="p-4 border-bottom">
                                        <h4 class="title mb-0"> Circle Avatars </h4>
                                    </div>
        
                                    <div class="p-4">
                                        <h6 class="text-muted mb-4 pb-2">Ex. <code class="text-danger">&lt;img src="images/home/01.jpg" class="img-fluid avatar avatar-ex-sm rounded-circle"&gt;</code></h6>
                                        
                                        <img src="images/client/05.jpg" class="img-fluid avatar avatar-ex-sm mr-2 rounded-circle" alt="">
                                        <img src="images/client/05.jpg" class="img-fluid avatar avatar-md-sm mr-2 rounded-circle" alt="">
                                        <img src="images/client/05.jpg" class="img-fluid avatar avatar-small mr-2 rounded-circle" alt="">
                                        <img src="images/client/05.jpg" class="img-fluid avatar avatar-medium mr-2 rounded-circle" alt="">
                                        <img src="images/client/05.jpg" class="img-fluid avatar avatar-large mt-3 mt-sm-0 mr-2 rounded-circle" alt="">
                                    </div>
                                </div>
                            </div><!--end col-->
                            <!-- Circle Avatars End -->
    
                            <!-- Nav Tabs Start -->
                            <div class="col mt-4 pt-2" id="nav-tabs">
                                <div class="component-wrapper rounded shadow">
                                    <div class="p-4 border-bottom">
                                        <h4 class="title mb-0"> Nav Tabs </h4>
                                    </div>
        
                                    <div class="p-4">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <ul class="nav nav-pills nav-justified flex-column flex-sm-row rounded" id="pills-tab" role="tablist">
                                                    <li class="nav-item">
                                                        <a class="nav-link rounded active" id="pills-cloud-tab" data-toggle="pill" href="#pills-cloud" role="tab" aria-controls="pills-cloud" aria-selected="false">
                                                            <div class="text-center py-2">
                                                                <h6 class="mb-0">Home</h6>
                                                            </div>
                                                        </a><!--end nav link-->
                                                    </li><!--end nav item-->
                                                    
                                                    <li class="nav-item">
                                                        <a class="nav-link rounded" id="pills-smart-tab" data-toggle="pill" href="#pills-smart" role="tab" aria-controls="pills-smart" aria-selected="false">
                                                            <div class="text-center py-2">
                                                                <h6 class="mb-0">About</h6>
                                                            </div>
                                                        </a><!--end nav link-->
                                                    </li><!--end nav item-->
                                                    
                                                    <li class="nav-item">
                                                        <a class="nav-link rounded" id="pills-apps-tab" data-toggle="pill" href="#pills-apps" role="tab" aria-controls="pills-apps" aria-selected="false">
                                                            <div class="text-center py-2">
                                                                <h6 class="mb-0">Service</h6>
                                                            </div>
                                                        </a><!--end nav link-->
                                                    </li><!--end nav item-->
                                                </ul><!--end nav pills-->
                                            </div><!--end col-->
                                        </div><!--end row-->

                                        <div class="row pt-2">
                                            <div class="col-12">
                                                <div class="tab-content" id="pills-tabContent">
                                                    <div class="tab-pane fade show active" id="pills-cloud" role="tabpanel" aria-labelledby="pills-cloud-tab">
                                                        <p class="text-muted mb-0">You can combine all the Landrick templates into a single one, you can take a component from the Application theme and use it in the Website.</p>
                                                    </div><!--end teb pane-->
                                                    
                                                    <div class="tab-pane fade" id="pills-smart" role="tabpanel" aria-labelledby="pills-smart-tab">
                                                        <p class="text-muted mb-0">You can combine all the Landrick templates into a single one, you can take a component from the Application theme and use it in the Website.</p>                       
                                                    </div><!--end teb pane-->
                        
                                                    <div class="tab-pane fade" id="pills-apps" role="tabpanel" aria-labelledby="pills-apps-tab">
                                                        <p class="text-muted mb-0">You can combine all the Landrick templates into a single one, you can take a component from the Application theme and use it in the Website.</p>                       
                                                    </div><!--end teb pane-->
                                                </div><!--end tab content-->
                                            </div><!--end col-->
                                        </div><!--end row-->
                                    </div>
                                </div>
                            </div><!--end col-->
                            <!-- Nav Tabs End -->

                            <!-- Progressbar Start -->
                            <div class="col mt-4 pt-2" id="progressbar">
                                <div class="component-wrapper rounded shadow">
                                    <div class="p-4 border-bottom">
                                        <h4 class="title mb-0"> Progressbar </h4>
                                    </div>
        
                                    <div class="p-4">
                                        <h6 class="text-muted mb-4 pb-2">Ex. <br> 
                                            <code class="text-danger">
                                                &lt;div class="progress-box"&gt;<br>&nbsp;&nbsp;
                                                &lt;h6 class="title text-muted"&gt; Progress&lt;/h6&gt;<br>&nbsp;&nbsp;
                                                &lt;div class="progress"&gt;<br>&nbsp;&nbsp;&nbsp;&nbsp;
                                                &lt;div class="progress-bar position-relative bg-primary" style="width:84%;"&gt;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                &lt;div class="progress-value d-block text-muted h6"&gt;84%&lt;/div&gt;<br>&nbsp;&nbsp;&nbsp;&nbsp;
                                                &lt;/div&gt;<br>&nbsp;&nbsp;
                                                &lt;/div&gt;<br>
                                                &lt;/div&gt;
                                            </code>
                                        </h6>
                                        
                                        <div class="progress-box">
                                            <h6 class="title text-muted">WordPress</h6>
                                            <div class="progress">
                                                <div class="progress-bar position-relative bg-primary" style="width:84%;">
                                                    <div class="progress-value d-block text-muted h6">84%</div>
                                                </div>
                                            </div>
                                        </div><!--end process box-->
                                        <div class="progress-box mt-4">
                                            <h6 class="title text-muted">PHP / MYSQL</h6>
                                            <div class="progress">
                                                <div class="progress-bar position-relative bg-primary" style="width:75%;">
                                                    <div class="progress-value d-block text-muted h6">75%</div>
                                                </div>
                                            </div>
                                        </div><!--end process box-->
                                        <div class="progress-box mt-4">
                                            <h6 class="title text-muted">Angular / JavaScript</h6>
                                            <div class="progress">
                                                <div class="progress-bar position-relative bg-primary" style="width:79%;">
                                                    <div class="progress-value d-block text-muted h6">79%</div>
                                                </div>
                                            </div>
                                        </div><!--end process box-->
                                        <div class="progress-box mt-4">
                                            <h6 class="title text-muted">HTML</h6>
                                            <div class="progress">
                                                <div class="progress-bar position-relative bg-primary" style="width:95%;">
                                                    <div class="progress-value d-block text-muted h6">95%</div>
                                                </div>
                                            </div>
                                        </div><!--end process box-->
                                    </div>
                                </div>
                            </div><!--end col-->
                            <!-- Progressbar End -->

                            <!-- Tooltip Start -->
                            <div class="col mt-4 pt-2" id="tooltips">
                                <div class="component-wrapper rounded shadow">
                                    <div class="p-4 border-bottom">
                                        <h4 class="title mb-0"> Tooltip </h4>
                                    </div>
        
                                    <div class="p-4">
                                        <h6 class="text-muted mb-2 pb-2">Ex. <code class="text-danger">&lt;a href="#"class="btn btn-primary mr-2 mb-2" data-toggle="tooltip" data-placement="top" title="Top Tooltip" alt=""&gt; Top Tooltip &lt;/a&gt;</code></h6>

                                        <a href="javascript:void" class="btn btn-primary mr-2 mt-2" data-toggle="tooltip" data-placement="top" title="Top Tooltip">Top</a>
                                        <a href="javascript:void" class="btn btn-primary mr-2 mt-2" data-toggle="tooltip" data-placement="left" title="Left Tooltip">Left</a>
                                        <a href="javascript:void" class="btn btn-primary mr-2 mt-2" data-toggle="tooltip" data-placement="bottom" title="Bottom Tooltip">Bottom</a>
                                        <a href="javascript:void" class="btn btn-primary mr-2 mt-2" data-toggle="tooltip" data-placement="right" title="Right Tooltip">Right</a>
                                    </div>
                                </div>
                            </div><!--end col-->
                            <!-- Tooltip End -->

                            <!-- Modal Start -->
                            <div class="col mt-4 pt-2" id="modals">
                                <div class="component-wrapper rounded shadow">
                                    <div class="p-4 border-bottom">
                                        <h4 class="title mb-0"> Modal </h4>
                                    </div>
        
                                    <div class="p-4">
                                        <a href="javascript:void(0)" data-toggle="modal" data-target="#LoginForm" class="btn btn-primary m-1"> Click Here</a>
                                        <a href="javascript:void(0)" data-toggle="modal" data-target="#login-popup" class="btn btn-primary m-1"> Login Popup</a>
                                        <a href="javascript:void(0)" data-toggle="modal" data-target="#subscribe-popup" class="btn btn-primary m-1">Subscribe Popup</a>
                                        <a href="javascript:void(0)" data-toggle="modal" data-target="#wishlist" class="btn btn-primary m-1">Wishlist Popup</a>
                                        <a href="javascript:void(0)" data-toggle="modal" data-target="#empty-cart" class="btn btn-primary m-1">Empty Cart Popup</a>
                                    </div>

                                    <!-- Modal Content Start -->
                                    <div class="modal fade" id="LoginForm" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content rounded shadow border-0">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalCenterTitle">Modal title </h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="bg-white p-3 rounded box-shadow">
                                                        <p class="text-muted mb-0">Dummy text is also used to demonstrate the appearance of different typefaces and layouts, and in general the content of dummy text is nonsensical. Due to its widespread use as filler text for layouts, non-readability is of great importance: human perception is tuned to recognize certain patterns and repetitions in texts. If the distribution of letters and 'words' is random, the reader will not be distracted from making a neutral judgement on the visual impact and readability of the typefaces (typography), or the distribution of text on the page (layout or type area). For this reason, dummy text usually consists of a more or less random series of words or syllables. This prevents repetitive patterns from impairing the overall visual impression and facilitates the comparison of different typefaces. Furthermore, it is advantageous when the dummy text is relatively realistic so that the layout impression of the final publication is not compromised.</p>                                                        
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-primary">Save changes</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Modal Content End -->

                                    <!-- Login Form Start -->
                                    <div class="modal fade" id="login-popup" tabindex="-1" role="dialog" aria-labelledby="login-title" aria-hidden="true">
                                        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                                            <div class="modal-content rounded shadow-lg border-0 overflow-hidden">
                                                <div class="modal-body p-0">
                                                    <div class="container-fluid px-0">
                                                        <div class="row align-items-center no-gutters">
                                                            <div class="col-lg-6 col-md-5">
                                                                <img src="images/course/online/ab02.jpg" class="img-fluid" alt="">
                                                            </div><!--end col-->

                                                            <div class="col-lg-6 col-md-7">
                                                                <form class="login-form p-4">
                                                                    <div class="row">
                                                                        <div class="col-lg-12">
                                                                            <div class="form-group">
                                                                                <label>Your Email <span class="text-danger">*</span></label>
                                                                                <div class="position-relative">
                                                                                    <i data-feather="user" class="fea icon-sm icons"></i>
                                                                                    <input type="email" class="form-control pl-5" placeholder="Email" name="email" required="">
                                                                                </div>
                                                                            </div>
                                                                        </div><!--end col-->
                                
                                                                        <div class="col-lg-12">
                                                                            <div class="form-group">
                                                                                <label>Password <span class="text-danger">*</span></label>
                                                                                <div class="position-relative">
                                                                                    <i data-feather="key" class="fea icon-sm icons"></i>
                                                                                    <input type="password" class="form-control pl-5" placeholder="Password" required="">
                                                                                </div>
                                                                            </div>
                                                                        </div><!--end col-->
                                
                                                                        <div class="col-lg-12">
                                                                            <div class="d-flex justify-content-between">
                                                                                <div class="form-group">
                                                                                    <div class="custom-control custom-checkbox">
                                                                                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                                                                                        <label class="custom-control-label" for="customCheck1">Remember me</label>
                                                                                    </div>
                                                                                </div>
                                                                                <p class="forgot-pass mb-0"><a href="auth-re-password.html" class="text-dark font-weight-bold">Forgot password ?</a></p>
                                                                            </div>
                                                                        </div><!--end col-->
                                
                                                                        <div class="col-lg-12 mb-0">
                                                                            <button class="btn btn-primary btn-block">Sign in</button>
                                                                        </div><!--end col-->
                                
                                                                        <div class="col-12 text-center">
                                                                            <p class="mb-0 mt-3"><small class="text-dark mr-2">Don't have an account ?</small> <a href="auth-signup.html" class="text-dark font-weight-bold">Sign Up</a></p>
                                                                        </div><!--end col-->
                                                                    </div><!--end row-->
                                                                </form>
                                                            </div><!--end col-->
                                                        </div><!--end row-->
                                                    </div><!--end container-->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Login Form End -->

                                    <!-- Subscribe popup Start -->
                                    <div class="modal fade" id="subscribe-popup" tabindex="-1" role="dialog" aria-labelledby="subscribe-title" aria-hidden="true">
                                        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                                            <div class="modal-content rounded shadow-lg border-0 overflow-hidden">
                                                <div class="modal-body p-0" style="background: url('images/subscribe.png') no-repeat;">
                                                    <button type="button" class="close float-right mr-2" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                    <div class="clearfix"></div>
                                                    <div class="container-fluid px-0">
                                                        <div class="row align-items-center no-gutters">
                                                            <div class="col-lg-6 offset-lg-6">
                                                                <div class="pb-5 pt-4 px-4">
                                                                    <h6 class="text-muted">Be the first to know daily updates</h6>

                                                                    <h4>Signup for daily updates</h4>
                                                                    <p class="text-muted mb-0">Subscribe to the Landrick mailing list to receive updates on new arrivals, special offers and our promotions.</p>
                                                                    <form class="mt-4">
                                                                        <div class="row">
                                                                            <div class="col-lg-12">
                                                                                <div class="foot-subscribe form-group">
                                                                                    <div class="position-relative">
                                                                                        <i data-feather="mail" class="fea icon-sm icons"></i>
                                                                                        <input type="email" name="email" id="daily-updates" class="form-control pl-5 rounded" placeholder="Your email : " required>
                                                                                    </div>
                                                                                </div>
                                                                            </div><!--end col-->

                                                                            <div class="col-lg-12">
                                                                                <input type="submit" id="submitsubscribe" name="send" class="btn btn-primary btn-block" value="Subscribe">
                                                                            </div><!--end col-->

                                                                            <div class="col-12">
                                                                                <div class="text-center">
                                                                                    <p class="mb-0 mt-3"><small class="text-dark mr-2">Already have an account ?</small> <a href="javascript:void(0)" class="text-dark font-weight-bold">Sign in</a></p>
                                                                                </div>
                                                                            </div><!--end col-->
                                                                        </div><!--end row-->
                                                                    </form>
                                                                </div>
                                                            </div><!--end col-->
                                                        </div><!--end row-->
                                                    </div><!--end container-->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Subscribe popup End -->

                                    <!-- Wishlist Popup Start -->
                                    <div class="modal fade" id="wishlist" tabindex="-1" role="dialog" aria-labelledby="wishlist-title" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content rounded shadow-lg border-0 overflow-hidden">
                                                <div class="modal-body py-5">
                                                    <div class="text-center">
                                                        <div class="icon d-flex align-items-center justify-content-center bg-soft-danger rounded-circle mx-auto" style="height: 95px; width:95px;">
                                                            <h1 class="mb-0"><i class="uil uil-heart-break align-middle"></i></h1>
                                                        </div>
                                                        <div class="mt-4">
                                                            <h4>Your wishlist is empty.</h4>
                                                            <p class="text-muted">Create your first wishlist request...</p>
                                                            <div class="mt-4">
                                                                <a href="javascript:void(0)" class="btn btn-outline-primary">+ Create new wishlist</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Wishlist Popup End -->

                                    <!-- Wishlist Popup Start -->
                                    <div class="modal fade" id="empty-cart" tabindex="-1" role="dialog" aria-labelledby="empty-cart-title" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content rounded shadow-lg border-0 overflow-hidden">
                                                <div class="modal-body py-5">
                                                    <div class="text-center">
                                                        <img src="images/shop/cart.png" class="avatar avatar-medium rounded-circle shadow" alt="">
                                                        <div class="mt-4">
                                                            <h4>Your cart is empty.</h4>
                                                            <p class="text-muted">Looks like you haven't made your choice yet...</p>
                                                            <div class="mt-4">
                                                                <a href="javascript:void(0)" class="btn btn-primary">Start Shopping</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Wishlist Popup End -->
                                </div>
                            </div><!--end col-->
                            <!-- Modal End -->

                            <!-- Table Start -->
                            <div class="col mt-4 pt-2" id="tables">
                                <div class="component-wrapper rounded shadow">
                                    <div class="p-4 border-bottom">
                                        <h4 class="title mb-0"> Table </h4>
                                    </div>

                                    <div class="p-4">
                                        <div class="table-responsive bg-white shadow rounded">
                                            <table class="table mb-0 table-center">
                                                <thead>
                                                    <tr>
                                                    <th scope="col">#</th>
                                                    <th scope="col">First</th>
                                                    <th scope="col">Last</th>
                                                    <th scope="col">Handle</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th scope="row">1</th>
                                                        <td>Mark</td>
                                                        <td>Otto</td>
                                                        <td>@mdo</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">2</th>
                                                        <td>Jacob</td>
                                                        <td>Thornton</td>
                                                        <td>@fat</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">3</th>
                                                        <td>Harry</td>
                                                        <td>Potter</td>
                                                        <td>@hpt</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div><!--end col-->
                            <!-- Table End -->

                            <!-- Blockquotes Start -->
                            <div class="col mt-4 pt-2" id="blockquotes">
                                <div class="component-wrapper rounded shadow">
                                    <div class="p-4 border-bottom">
                                        <h4 class="title mb-0"> Blockquotes </h4>
                                    </div>
        
                                    <div class="p-4">
                                        <blockquote class="blockquote p-3 mb-0">
                                            <p class="text-muted mb-0 font-italic">" There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. "</p>
                                        </blockquote>
                                    </div>
                                </div>
                            </div><!--end col-->
                            <!-- Blockquotes End -->

                            <!-- Icons Start -->
                            <div class="col mt-4 pt-2" id="icons">
                                <div class="component-wrapper rounded shadow">
                                    <div class="p-4 border-bottom">
                                        <h4 class="title mb-0"> Icons </h4>
                                    </div>
        
                                    <div class="p-4">
                                        <h6>Feather Icons</h6>
                                        <p class="text-muted">There are 280+ feather icons and you can get all icons info from here: <a href="https://feathericons.com/" target="_blank"><code class="text-primary">https://feathericons.com/</code></a></p>
                                        <h6 class="text-muted mb-4 pb-2">Ex. <code class="text-danger">&lt;i data-feather="mail" class="fea icon-sm"&gt; &lt;/i&gt;</code></h6>

                                        <i data-feather="user" class="fea icon-ex-md mr-2"></i>
                                        <i data-feather="facebook" class="fea icon-ex-md mr-2"></i>
                                        <i data-feather="map-pin" class="fea icon-ex-md mr-2"></i>
                                        <i data-feather="linkedin" class="fea icon-ex-md mr-2"></i>
                                        <i data-feather="camera" class="fea icon-ex-md mr-2"></i>
                                        <i data-feather="mail" class="fea icon-ex-md mr-2"></i>

                                        <h6 class="mt-4">Material Design Icons</h6>
                                        <p class="text-muted">There are 4400+ Material Design icons and you can get all icons info from here: <a href="https://materialdesignicons.com/" target="_blank"><code class="text-primary">https://materialdesignicons.com/</code></a></p>
                                        <h6 class="text-muted mb-4 pb-2">Ex. <code class="text-danger">&lt;i class="mdi mdi-home"&gt; &lt;/i&gt;</code></h6>

                                        <i class="mdi mdi-home h4 mr-2"></i>
                                        <i class="mdi mdi-facebook h4 mr-2"></i>
                                        <i class="mdi mdi-chevron-tight h4 mr-2"></i>
                                        <i class="mdi mdi-camera-image h4 mr-2"></i>
                                        <i class="mdi mdi-car-light-high h4 mr-2"></i>
                                        <i class="mdi mdi-silverware-fork-knife h4 mr-2"></i>

                                        <h6 class="mt-4">Flaticon Icons</h6>
                                        <p class="text-muted">There are Flaticon icons and you can get all icons info from here: <a href="https://www.flaticon.com/packs/basic-icon" target="_blank"><code class="text-primary">https://www.flaticon.com/packs/basic-icon</code></a></p>
                                        
                                        <img src="images/icon/Email.svg" height="50" class="mr-3" alt="">
                                        <img src="images/icon/bitcoin.svg" height="50" class="mr-3" alt="">
                                        <img src="images/icon/calendar.svg" height="50" class="mr-3" alt="">
                                        <img src="images/icon/location.svg" height="50" class="mr-3" alt="">

                                        <h6 class="mt-4">Iconscout (Unicons) Icons</h6>
                                        <p class="text-muted">There are 1100+ Iconscout (Unicons) Icons and you can get all icons info from here: <a href="https://iconscout.com/unicons" target="_blank"><code class="text-primary">https://www.flaticon.com/packs/basic-icon</code></a></p>
                                        <h6 class="text-muted mb-4 pb-2">Ex. <code class="text-danger"><br>&lt;span class="h3 text-primary mr-2"&gt;<br>&nbsp; &lt;i class="uil uil-0-plus"&gt;&lt;/i&gt;<br>&lt;/span&gt;</code></h6>

                                        <span class="h3 text-primary mr-2"><i class="uil uil-0-plus"></i></span>
                                        <span class="h3 text-primary mr-2"><i class="uil uil-android"></i></span>
                                        <span class="h3 text-primary mr-2"><i class="uil uil-bitcoin"></i></span>
                                        <span class="h3 text-primary mr-2"><i class="uil uil-calendar-alt"></i></span>
                                        <span class="h3 text-primary"><i class="uil uil-chart-pie-alt"></i></span>
                                    </div>
                                </div>
                            </div><!--end col-->
                            <!-- Icons End -->
                        </div><!--end row-->
                    </div>
                </div>                
            </div><!--end container-->
        </section><!--end section-->
        <!-- End -->
@stop