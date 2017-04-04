@extends('adminlte::page')

@section('htmlheader_title')
    Step wizard demo
@endsection

@section('main-content')
    <div class="container-fluid spark-screen">
        <div class="row">
            <div class="col-md-12">

                <h4>Case 1:</h4>

                <div class="box box-default box-solid">
                    <div class="box-header">
                        <div class="progress progress-sm active">
                            <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 25%">
                                <span class="sr-only">25% Complete</span>
                            </div>
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">

                        <div class="nav-tabs-custom">
                            <ul class="nav nav-tabs nav-justified">
                                <li class="active"><a href="#tab_1" data-toggle="tab">Step 1</a></li>
                                <li><a href="#tab_2" data-toggle="tab">Step 2</a></li>
                                <li><a href="#tab_3" data-toggle="tab">Step 3</a></li>
                                <li><a href="#tab_4" data-toggle="tab">Step 4</a></li>
                            </ul>
                            <div class="tab-content">


                                {{--<a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">--}}
                                {{--<span class="fa fa-angle-left"></span>--}}
                                {{--</a>--}}
                                {{--<a class="right carousel-control" href="#carousel-example-generic" data-slide="next">--}}
                                {{--<span class="fa fa-angle-right"></span>--}}
                                {{--</a>--}}


                                <div role="tabpanel" class="tab-pane fade in active" id="tab_1">
                                    <b>How to use:</b>

                                    <p>Exactly like the original bootstrap tabs except you should use
                                        the custom wrapper <code>.nav-tabs-custom</code> to achieve this style.</p>
                                    A wonderful serenity has taken possession of my entire soul,
                                    like these sweet mornings of spring which I enjoy with my whole heart.
                                    I am alone, and feel the charm of existence in this spot,
                                    which was created for the bliss of souls like mine. I am so happy,
                                    my dear friend, so absorbed in the exquisite sense of mere tranquil existence,
                                    that I neglect my talents. I should be incapable of drawing a single stroke
                                    at the present moment; and yet I feel that I never was a greater artist than now.
                                </div>
                                <!-- /.tab-pane -->
                                <div role="tabpanel" class="tab-pane fade" id="tab_2">
                                    The European languages are members of the same family. Their separate existence is a myth.
                                    For science, music, sport, etc, Europe uses the same vocabulary. The languages only differ
                                    in their grammar, their pronunciation and their most common words. Everyone realizes why a
                                    new common language would be desirable: one could refuse to pay expensive translators. To
                                    achieve this, it would be necessary to have uniform grammar, pronunciation and more common
                                    words. If several languages coalesce, the grammar of the resulting language is more simple
                                    and regular than that of the individual languages.
                                </div>
                                <!-- /.tab-pane -->
                                <div role="tabpanel"class="tab-pane fade" id="tab_3">
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                    when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                                    It has survived not only five centuries, but also the leap into electronic typesetting,
                                    remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset
                                    sheets containing Lorem Ipsum passages, and more recently with desktop publishing software
                                    like Aldus PageMaker including versions of Lorem Ipsum.
                                </div>
                                <!-- /.tab-pane -->
                                <div role="tabpanel" class="tab-pane fade" id="tab_4">
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                    when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                                    It has survived not only five centuries, but also the leap into electronic typesetting,
                                    remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset
                                    sheets containing Lorem Ipsum passages, and more recently with desktop publishing software
                                    like Aldus PageMaker including versions of Lorem Ipsum.
                                </div>
                            </div>
                            <!-- /.tab-content -->

                        </div>


                    </div>
                    <div class="box-footer">

                        <button type="submit" class="btn btn-primary btn-flat pull-left">Previous</button>
                        <button type="submit" class="btn btn-primary btn-flat pull-right">Next</button>

                    </div>
                </div>


                <h4>Case 2:</h4>


                <div class="progress progress-sm active">
                    <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 25%">
                        <span class="sr-only">25% Complete</span>
                    </div>
                </div>

                <div class="nav-tabs-custom">
                    <ul class="nav nav-tabs nav-justified">
                        <li class="active"><a href="#tab2_1" data-toggle="tab">Step 1</a></li>
                        <li><a href="#tab2_2" data-toggle="tab">Step 2</a></li>
                        <li><a href="#tab2_3" data-toggle="tab">Step 3</a></li>
                        <li><a href="#tab2_4" data-toggle="tab">Step 4</a></li>
                    </ul>
                    <div class="tab-content">


                        {{--<a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">--}}
                        {{--<span class="fa fa-angle-left"></span>--}}
                        {{--</a>--}}
                        {{--<a class="right carousel-control" href="#carousel-example-generic" data-slide="next">--}}
                        {{--<span class="fa fa-angle-right"></span>--}}
                        {{--</a>--}}


                        <div role="tabpanel" class="tab-pane fade in active" id="tab2_1">
                            <b>How to use:</b>

                            <p>Exactly like the original bootstrap tabs except you should use
                                the custom wrapper <code>.nav-tabs-custom</code> to achieve this style.</p>
                            A wonderful serenity has taken possession of my entire soul,
                            like these sweet mornings of spring which I enjoy with my whole heart.
                            I am alone, and feel the charm of existence in this spot,
                            which was created for the bliss of souls like mine. I am so happy,
                            my dear friend, so absorbed in the exquisite sense of mere tranquil existence,
                            that I neglect my talents. I should be incapable of drawing a single stroke
                            at the present moment; and yet I feel that I never was a greater artist than now.
                        </div>
                        <!-- /.tab-pane -->
                        <div role="tabpanel" class="tab-pane fade" id="tab2_2">
                            The European languages are members of the same family. Their separate existence is a myth.
                            For science, music, sport, etc, Europe uses the same vocabulary. The languages only differ
                            in their grammar, their pronunciation and their most common words. Everyone realizes why a
                            new common language would be desirable: one could refuse to pay expensive translators. To
                            achieve this, it would be necessary to have uniform grammar, pronunciation and more common
                            words. If several languages coalesce, the grammar of the resulting language is more simple
                            and regular than that of the individual languages.
                        </div>
                        <!-- /.tab-pane -->
                        <div role="tabpanel"class="tab-pane fade" id="tab2_3">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                            when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                            It has survived not only five centuries, but also the leap into electronic typesetting,
                            remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset
                            sheets containing Lorem Ipsum passages, and more recently with desktop publishing software
                            like Aldus PageMaker including versions of Lorem Ipsum.
                        </div>
                        <!-- /.tab-pane -->
                        <div role="tabpanel" class="tab-pane fade" id="tab2_4">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                            when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                            It has survived not only five centuries, but also the leap into electronic typesetting,
                            remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset
                            sheets containing Lorem Ipsum passages, and more recently with desktop publishing software
                            like Aldus PageMaker including versions of Lorem Ipsum.
                        </div>
                    </div>
                    <!-- /.tab-content -->

                </div>

                <h4>Case 1:</h4>

                <div class="nav-tabs-custom">

                    <div class="progress progress-sm active">
                        <div class="progress-bar progress-bar-success progress-bar-striped"
                             role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"
                             style="width: 25%">
                            <span class="sr-only">25% Complete</span>
                        </div>
                    </div>

                    <ul class="nav nav-tabs nav-justified">
                        <li class="active"><a href="#tab3_1" data-toggle="tab">Step 1</a></li>
                        <li><a href="#tab3_2" data-toggle="tab">Step 2</a></li>
                        <li><a href="#tab3_3" data-toggle="tab">Step 3</a></li>
                        <li><a href="#tab3_4" data-toggle="tab">Step 4</a></li>
                    </ul>
                    <div class="tab-content">

                        <div role="tabpanel" class="tab-pane fade in active" id="tab3_1">
                            <b>How to use:</b>

                            <p>Exactly like the original bootstrap tabs except you should use
                                the custom wrapper <code>.nav-tabs-custom</code> to achieve this style.</p>
                            A wonderful serenity has taken possession of my entire soul,
                            like these sweet mornings of spring which I enjoy with my whole heart.
                            I am alone, and feel the charm of existence in this spot,
                            which was created for the bliss of souls like mine. I am so happy,
                            my dear friend, so absorbed in the exquisite sense of mere tranquil existence,
                            that I neglect my talents. I should be incapable of drawing a single stroke
                            at the present moment; and yet I feel that I never was a greater artist than now.
                        </div>
                        <!-- /.tab-pane -->
                        <div role="tabpanel" class="tab-pane fade" id="tab3_2">
                            The European languages are members of the same family. Their separate existence is a myth.
                            For science, music, sport, etc, Europe uses the same vocabulary. The languages only differ
                            in their grammar, their pronunciation and their most common words. Everyone realizes why a
                            new common language would be desirable: one could refuse to pay expensive translators. To
                            achieve this, it would be necessary to have uniform grammar, pronunciation and more common
                            words. If several languages coalesce, the grammar of the resulting language is more simple
                            and regular than that of the individual languages.
                        </div>
                        <!-- /.tab-pane -->
                        <div role="tabpanel"class="tab-pane fade" id="tab3_3">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                            when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                            It has survived not only five centuries, but also the leap into electronic typesetting,
                            remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset
                            sheets containing Lorem Ipsum passages, and more recently with desktop publishing software
                            like Aldus PageMaker including versions of Lorem Ipsum.
                        </div>
                        <!-- /.tab-pane -->
                        <div role="tabpanel" class="tab-pane fade" id="tab3_4">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                            when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                            It has survived not only five centuries, but also the leap into electronic typesetting,
                            remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset
                            sheets containing Lorem Ipsum passages, and more recently with desktop publishing software
                            like Aldus PageMaker including versions of Lorem Ipsum.
                        </div>
                    </div>
                    <!-- /.tab-content -->
                    <div class="box-footer">

                        <button type="submit" class="btn btn-primary btn-flat pull-left">Previous</button>
                        <button type="submit" class="btn btn-primary btn-flat pull-right">Next</button>

                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
