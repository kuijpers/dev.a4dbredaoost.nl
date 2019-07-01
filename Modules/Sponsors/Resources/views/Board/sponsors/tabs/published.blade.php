<div class="tab-pane" id="published" role="tabpanel">

    @if(isset($publisher_approved))
        {{--{{dd( $publisher_approved )}}--}}
        @if($publisher_approved->isNotEmpty())
            <div class="template__table_static template__table_responsive">
                <div class="scrollable scrollbar-macosx">
                    {{--Test published--}}
                    <table class="table table-condensed">
                        <thead>
                            <tr>
                                <th>
                                    @lang('sponsors::board/tabs.tab_table_title_title')
                                </th>
                                <th>
                                    @lang('sponsors::board/tabs.tab_table_title_who')
                                </th>
                                <th>
                                    @lang('sponsors::board/tabs.tab_table_title_published')
                                </th>
                                <th>
                                    &euro;
                                </th>
                                <th>
                                    @lang('sponsors::board/tabs.tab_table_title_creation_date')
                                </th>
                                <th>
                                    @lang('sponsors::board/tabs.tab_table_title_last_update')
                                </th>
                                <th>
                                    &nbsp;
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($publisher_approved as $publisher_approve)

                            <tr>
                                <td>
                                    {{$publisher_approve->title}}
                                </td>
                                <td>
                                    <strong>@lang('sponsors::board/tabs.tab_nav_author') :</strong>
                                    {{$publisher_approve->getAuthorName($publisher_approve->author_group)}}
                                    <br>
                                    <strong>@lang('sponsors::board/tabs.tab_nav_publisher') :</strong>
                                    @if(!empty($publisher_approve->publisher))
                                        {{$publisher_approve->getpublisherName($publisher_approve->publisher_group)}}
                                    @endif
                                    <br>
                                    <strong>@lang('sponsors::board/tabs.tab_nav_publisher') :</strong>
                                    @if(!empty($publisher_approve->publisher))
                                        {{$publisher_approve->getPublisherName($publisher_approve->publisher_group)}}
                                    @endif
                                </td>
                                <td>
                                    <strong>@lang('sponsors::board/tabs.tab_table_title_published_from') :</strong>
                                    {{Carbon\Carbon::parse($publisher_approve->publish_date_start)->format('d-m-Y H:i:s')}}
                                    <br>
                                    <strong>@lang('sponsors::board/tabs.tab_table_title_published_till') :</strong>
                                    @if(Carbon\Carbon::parse($publisher_approve->publish_date_end)->format('d-m-Y H:i')<= Carbon\Carbon::parse($publisher_approve->publish_date_start)->format('d-m-Y H:i:s'))
                                        @lang('sponsors::board/tabs.tab_table_title_published_forever')
                                    @else
                                        {{Carbon\Carbon::parse($publisher_approve->publish_date_end)->format('d-m-Y H:i:s')}}
                                    @endif
                                </td>
                                <td>
                                    @if($publisher_approve->payment_received)
                                        <i class="fa fa-check fa-2x text-success" aria-hidden="true"></i>
                                    @else
                                        <i class="fa fa-times fa-2x text-danger" aria-hidden="true"></i>
                                    @endif
                                </td>
                                <td>
                                    {{$publisher_approve->created_at->format('d-m-Y H:i:s')}}
                                </td>
                                <td>
                                    {{$publisher_approve->updated_at->format('d-m-Y H:i:s')}}
                                </td>
                                <td>
                                    <div class="btn-group btn-group-xs" role="group">
                                        @php
                                            if(!empty($publisher_approve->sponsor_image()->name)){
                                                $image = $publisher_approve->sponsor_image()->name;
                                            }else{
                                                $image = '';
                                            }
                                            if(!empty($publisher_approve->sponsor_link()->link)){
                                                $link = $publisher_approve->sponsor_link()->link;
                                            }else{
                                                $link = '';
                                            }

                                            //die( print_r($publisher_approve->sponsor_link()->name) );

                                            $publisher_approve_list=[
                                            	'id'                    => $publisher_approve->id,
                                            	'title'                 => $publisher_approve->title,

                                            	'body'                  => htmlspecialchars_decode($publisher_approve->body),

                                            	'package'               => $publisher_approve->sponsor_packages_id,

                                            	'payment_received'      => $publisher_approve->payment_received,
                                            	'payment_received_at'   => $publisher_approve->payment_received,
                                            	'image_name'            => $image,
                                            	'link'                  => $link,

                                            	'author'                => $publisher_approve->getAuthorName($publisher_approve->author_group),
                                            	'editor'                => $publisher_approve->getEditorName($publisher_approve->editor_group),
                                            	'publisher'             => $publisher_approve->getPublisherName($publisher_approve->publisher_group),

                                            	//'publish_date_start'    => $editor_approve->publish_date_start->format('d-m-Y H:m:i'),

                                            	'publish_date_start'    => Carbon\Carbon::parse($publisher_approve->publish_date_start)->format('d-m-Y H:m:i'),


                                            	//'publish_date_end'      => $editor_approve->publish_date_end->format('d-m-Y H:m:i'),

                                            	'publish_date_end'    => Carbon\Carbon::parse($publisher_approve->publish_date_end)->format('d-m-Y H:m:i'),
                                            ];

                                        $publisher_approve_modal = json_encode($publisher_approve_list, JSON_PRETTY_PRINT);

                                        @endphp
                                         {{--View the data in Modal--}}
                                        <button type="button" class="btn btn-info"
                                                data-hoover="tooltip"
                                                title="Bekijk"
                                                data-toggle="modal"
                                                data-target="#view_publisher_approved"
                                                data-info = "{{$publisher_approve_modal}}"
                                        >
                                            <i class="fa fa-eye" aria-hidden="true"></i>
                                        </button>
                                         {{--Edit the data in Modal--}}
                                        <button type="button" class="btn btn-warning"
                                                data-hoover="tooltip"
                                                title="Wijzig"
                                                data-toggle="modal"
                                                data-target="#edit_publisher_approved"
                                                data-info = "{{$publisher_approve_modal}}"
                                        >
                                            <i class="fa fa-pencil" aria-hidden="true"></i>
                                        </button>
                                         {{--Delete/archive the data thru Modal--}}
                                        <button type="button" class="btn btn-danger"
                                                data-hoover="tooltip"
                                                title="Verwijder"
                                                data-toggle="modal"
                                                data-target="#delete_article"
                                                data-info = "{{$publisher_approve_modal}}"
                                        >
                                            <i class="fa fa-trash-o" aria-hidden="true"></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>

                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        @else
            <div class="alert alert-info text-center" role="alert">
                <i class="alert-ico fa fa-fw fa-exclamation"></i>
                @lang('sponsors::board/tabs.tab_data_no_data')
            </div>
        @endif
    @endif

</div>