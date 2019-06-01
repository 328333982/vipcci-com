@extends('layouts.app')
@section('title','首页')
@section('description',$topic->description)
@section('keywords',$topic->keywords)
@section('content')
    <div class="flex-container-1">
        <div class="img-scroll-border">
            <div class="img-scroll">
                @foreach($app_img_url as $k=>$v)
                    <img src="{{ $v->url }}" alt=""><br><br>
                @endforeach
                {{--<img src="https://img.xclient.info/cdn/mw1024/006ehIt6ly1frukdemvtuj30nm0dnwh8" alt=""><br><br>--}}
                {{--<img src="https://img.xclient.info/cdn/mw1024/006ehIt6ly1frukdenicij30nm0do437" alt=""><br><br>--}}
                {{--<img src="https://img.xclient.info/cdn/mw1024/006ehIt6ly1frukdeny9nj30nm0dowfs" alt=""><br><br>--}}
            </div>
        </div>
        <div class="info-right-side-1">
            <div class="info-right-side-img">
                <img src="{{ $topic->avatar }}" alt="">
                <p>{{ $topic->title }}</p>
            </div>
            <dvi class="info-right-side-1-download">
                <span>下载量</span>
                <p>{{ $topic->download }}</p>
            </dvi>
            <div class="info-right-side-1-btn">
                <div class="download_btn"><a href="">下载应用</a></div>
                <div class="support_btn"><a href="">赞助一下</a></div>
            </div>

            <div class="info-right-side-1-info">
                <p>基本信息</p>
                <div>
                    <span>最新版本</span>
                    <span>{{ $topic->app_version_url()->orderBy('created_at', 'desc')->first()->app_version }}</span>
                </div>
                <div>
                    <span>类别</span>
                    <span><a href="{{route('category',$topic->category()->first()->id)}}">{{ $topic->category()->first()->name }}</a></span>
                </div>
                <div>
                    <span>更新时间</span>
                    <span>2018-12-12</span>
                </div>
            </div>

        </div>
    </div>
    <div class="flex-container-2">
        <div class="introduction-scroll-2">
            <div class="introduction-scroll-2-1">
                @markdown($topic->description)

                {{--Wondershare Video Converter Ultimate是一款 Mac 上的万能视频格式转换器，--}}
                {{--可以将包括MP4、MOV 、3GP、AVI、WMV、RM、MPEG-1、MPEG-2、FLV、ASF、M4A、WMA、WAV、MP3、--}}
                {{--AAC和AC3在内的多媒体格式转换为便携式视频/音频播放器（Zune、iPod、Apple TV、iPhone、PSP）--}}
                {{--支持的格式,且不会失去原有的品质。--}}
            </div>
            <div>
                <h4>应用介绍</h4>
                <div style="margin-left: 1em;color: #4E575F;">
                    @markdown($topic->introduction)


                    {{--Wondershare Video Converter Ultimate是一款 Mac OS X 上的万能视频格式转换器，可以将包括MP4、MOV 、3GP、AVI、WMV、RM、MPEG-1、MPEG-2、FLV、ASF、M4A、WMA、WAV、MP3、AAC和AC3在内的多媒体格式转换为便携式视频/音频播放器（Zune、iPod、Apple TV、iPhone、PSP）支持的格式,且不会失去原有的品质。它功能强大，支持视频编辑，可以定制文件大小和输出质量。--}}

                    {{--功能介绍--}}

                    {{--支持2D转换为3D视频。--}}
                    {{--直接转换DVD到流行的视频和音频格式（MP4，WMV，AVI，FLV，MOV，3GP，WMA，M4A，和MP3等），保持100%视频质量。--}}
                    {{--刻录DVD视频或视频文件通用格式到光盘上。--}}
                    {{--转换视频/音频，包括高清视频流行的视频/音频格式。--}}
                    {{--提取各种DVD等视频文件的音轨。--}}
                    {{--剪裁视频（去除黑条等等...）。--}}
                    {{--设置输出参数（分辨率，比特率，帧速率等）--}}
                    {{--编辑视频与独特的技术方案，如调整效果，添加水印和字幕。--}}
                    {{--将单个文件分割成多个部分或将多个文件合并成一个。--}}
                    {{--您可以从内置的菜单模板或自己的背景图像和音乐选择DVD菜单。--}}
                    {{--您可以捕捉视频/ DVD任何图片，并保存为JPEG或BMP。--}}
                    {{--在一个文件中应用多个轮廓。--}}
                    {{--支持批量转换。--}}
                    {{--支持所有常见的视频，DVD，高清格式。--}}
                    {{--从YouTube，谷歌，雅虎，MySpace和其他视频网站下载在线视频，然后转换成所需的格式。--}}
                    {{--支持转换文件DRM保护。--}}
                    {{--预览视频。--}}
                    {{--高速。--}}
                    {{--高品质的成果。--}}
                    {{--一个愉快和友好的界面。--}}

                </div>
                <h4>激活方法</h4>
                <div style="margin-left: 1em;color: #4E575F;">
                    @markdown($topic->crack)
                    {{--10.0.7.8--}}
                    {{--使用SN.txt中的激活码激活--}}

                    {{--5.7.1&&5.6.0--}}
                    {{--直接安装--}}

                    {{--before--}}

                    {{--通过防火墙软件（如：Little Snitch）阻止程序联网。--}}
                    {{--打开软件，输入SN.txt中注册码，安装完成。--}}
                </div>
                <h4>解压密码</h4>
                <div style="margin-left: 1em;color: #4E575F;">本站所有dmg、zip 打开密码均为 vipcci.com</div>

                <div class="introduction-scroll-2-tip">
                    <h4>常见问题</h4>
                    <div style="margin-left: 1em;color: #4E575F;">
                        如遇：「xxx.app已损坏，打不开。你应该将它移到废纸篓」，并非你安装的软件已损坏，而是Mac系统的安全设置问题。详见：MAC应用无法打开或文件损坏的处理方法
                        激活工具在新系统10.12中打不开。参照 让Special-K系列Patch工具运行在macOS sierra 10.12上 与 让CORE Keygen系列注册机成功运行在macOS sierra 10.12上的方法
                        本站DMG、zip统一打开密码：xclient.info
                        关于激活方法，大部分文章都对不同版本做了不同的激活说明。不过，最终还是以dmg包中的实际情况为准，如果里面只有单独的 .app或者.pkg文件，说明不需要做任何激活操作。
                    </div>
                </div>

            </div>
        </div>
        <div class="info-right-side-2">
            <div class="info-right-side-2-1">
                <p>热门应用</p>
                <div>
                    @foreach($topics_by_download as $k=>$v)

                        <div class="info-right-side-2-hot">
                            <div class="info-right-side-2-hot-img">
                                <img src="{{ $v->avatar }}" alt="">
                                <p><a href="{{route('category',$v->category()->first()->id)}}">{{ $v->category()->first()->name }}</a></p>
                            </div>
                            <div class="info-right-side-2-hot-info">
                                <p> {{ $v->title }}</p>
                                <div style="color: #777777">{{ $v->description }}</div>
                                <div style="color: #777777;height: auto;">
                                    <span><img style="height: 1.2em; margin-bottom: .3em" src="{{ asset('download_icon.png') }}" alt=""> {{ $v->download }}</span>
                                    <span><img style="height: 1.2em; margin-bottom: .3em" src="{{ asset('date_icon.png') }}" alt=""> {{ $v->updated_at->toDateString() }}</span>
                                </div>

                            </div>
                        </div>


                    @endforeach
                </div>

            </div>
            <div class="other-list">
                {{--其他列表--}}
            </div>

        </div>
    </div>
    <div class="flex-container-3">
        <div class="download-list">
            <p>版本列表</p>
            <div class="history_version" id="versions">

                <table>
                    <thead>
                    <tr>
                        <th class="version_num">版本号</th>
                        <th>语言</th>
                        <th>更新时间</th>
                        <th>文件大小</th>
                        <th>下载地址</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td class="version_num">10.3.0.12</td>
                        <td>英文</td>
                        <td>2018-12-19</td>
                        <td>88M</td>
                        <td>

                            <a class="btn-download" target="_blank" href="https://xclient.info/s/wondershare-video-converter-ultimate.html?a=dl&amp;v=10.3.0.12&amp;k=0&amp;t=bc37f322520716ac0a950e52acb290a1e6dcab9f">
                                <i class="iconfont icon-disk-ctfile"></i>
                                城通网盘 </a>

                            <a class="btn-download" target="_blank" href="https://xclient.info/s/wondershare-video-converter-ultimate.html?a=dl&amp;v=10.3.0.12&amp;k=1&amp;t=bc37f322520716ac0a950e52acb290a1e6dcab9f">
                                <i class="iconfont icon-disk-baidu"></i>
                                百度云盘 </a>
                        </td>
                    </tr>
                    <tr>
                        <td class="version_num">10.2.0.2</td>
                        <td>英文</td>
                        <td>2018-11-16</td>
                        <td>90.5M</td>
                        <td>

                            <a class="btn-download" target="_blank" href="https://xclient.info/s/wondershare-video-converter-ultimate.html?a=dl&amp;v=10.2.0.2&amp;k=2&amp;t=bc37f322520716ac0a950e52acb290a1e6dcab9f">
                                <i class="iconfont icon-disk-ctfile"></i>
                                城通网盘 </a>

                            <a class="btn-download" target="_blank" href="https://xclient.info/s/wondershare-video-converter-ultimate.html?a=dl&amp;v=10.2.0.2&amp;k=3&amp;t=bc37f322520716ac0a950e52acb290a1e6dcab9f">
                                <i class="iconfont icon-disk-baidu"></i>
                                百度云盘 </a>
                        </td>
                    </tr>

                    </tbody>
                </table>
            </div>
        </div>

    </div>

    <div class="flex-container-4">
        <div class="related-app">
            <div class="related-app-list">
                <ul class="related-app-list-ul">
                    @foreach($topics as $topic)
                        <li class="related-app-list-li">
                            <a class="related-app-list-a" href="{{route('topic',$topic->id)}}">
                                <div class="related-app-list-div-1">

                                    <div class="related-app-list-div-1-1">
                                        <img src="{{ $topic->avatar }}" alt="">
                                    </div>

                                    <div class="related-app-list-div-1-2">
                                        <div>
                                            <img src="{{ asset('download_icon.png') }}" alt="">
                                            {{ $topic->download }}
                                        </div>

                                        <div>
                                            <img src="{{ asset('date_icon.png') }}" alt="">
                                            {{ $topic->updated_at->toDateString() }}
                                        </div>
                                    </div>
                                    <div class="related-app-list-div-1-3">
                                        {{ $topic->title }}
                                        Elimisoft Duplicate Find good 破解版
                                    </div>

                                    <div class="related-app-list-div-1-4">
                                        {{ $topic->introduction }}
                                        是mac平台上一款非常好用的重复文件清理软件，能够帮助用户找到电脑里的所有能够帮助用户找到电脑里的所有...
                                    </div>
                                    <div class="related-app-list-div-1-5">
                                        <object>
                                            <a href="{{route('category',$topic->category()->first()->id)}}">
                                                <span class="badge badge-success">{{ $topic->category->name }}</span>
                                            </a>
                                        </object>
                                    </div>

                                </div>
                            </a>

                        </li>
                    @endforeach

                </ul>
            </div>
        </div>

    </div>
@stop