@extends('layout')
@section('content')
<div class="span3">
    <div class="widget">
        <div class="pricing-plans plans-1">
            <div class="plan-container">
                <div class="plan">
                    <div class="plan-header">
                        <div class="plan-title">
                            <?php $sv=DB::table('sinhvien')->where('username',Auth::user()->username)->first();
                            $nganh=DB::table('nganh')->where('id',$sv->nganh_id)->first();
                            ?>
                            MSSV: {{$sv->id}}
                        </div>
                    </div>
                    <div class="plan-features">
                        <ul>
                            <li><strong>Họ tên:</strong> {{Auth::user()->name}}</li>
                            <li><strong>Lớp:</strong> {{$sv->class}}</li>
                            <li><strong>Ngành:</strong> {{$nganh->ten}}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="span9">
    <div class="widget widget-table action-table">
        <div class="widget-header">
            <i class="fa fa-check-circle"></i>
            <h3>Kết quả đăng ký</h3>
        </div>
        <div class="widget-content">
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th style="width: 20px"> STT</th>
                        <th> Tên học phần</th>
                        <th> Số TC</th>
                        <th> Phòng thi</th>
                        <th> Ngày thi</th>
                        <th> Thời gian</th>
                        <th class="td-actions" style="width: 30px"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php $sv = DB::table('sinhvien')->where('username', Auth::user()->username)->first();
                    $hk = DB::table('hocky')->whereDate('tungay', '<=', Carbon\Carbon::now())->whereDate('denngay', '>=', Carbon\Carbon::now())->first();

                    $data = DB::table('phieudangky')
                        ->join('thihocphan', 'phieudangky.lophocphan_id', '=', 'thihocphan.id')
                        ->where('sinhvien_id', $sv->id)->where('thihocphan.id', $hk->id)
                        ->select('phieudangky.*', 'monhoc_id', 'noithi', 'thoigianbatdau', 'thoigianketthuc', 'ngaythi')
                        ->get();
                    $stt = 0;
                    ?>
                    @foreach($data as $item)
                    <?php $stt++;
                    $hp = DB::table('monhoc')->where('id', $item->monhoc_id)->first();
                    ?>
                    <tr>
                        <td> {{$stt}}</td>
                        <td> {{$hp->ten}}</td>
                        <td> {{$hp->sotinchi}}</td>
                        <td> {{$item->noithi}}</td>
                        <td> {{Carbon\Carbon::parse($item->ngaythi)->format('d-m-Y')}}</td>
                        <td> {{Carbon\Carbon::parse($item->thoigianbatdau)->format('H:i')}} - {{Carbon\Carbon::parse($item->thoigianketthuc)->format('H:i')}}</td>

                        <td class="td-actions">
                            <a href="#delModal" class="btn btn-small btn-danger open-delModal" data-id="{{$item->id}}" data-toggle="modal">Hủy đ.ký</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
<div id="myModal" class="modal fade hide" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content" id="myModalContent"></div>
    </div>
</div>
<div id="delModal" class="modal-custom  fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 id="myModalLabel">Hủy đăng ký</h3>
    </div>
    <form action="" id="abc" class="form-custom" method="post">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <div class="modal-body">
            <div class="row">
                <div class="span4">
                    <div class="control-group">
                        <input type="hidden" name="ID" class="ID" value="">
                        <label class="control-label">Bạn có muốn hủy đăng ký học phần này?</label>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button class="btn" data-dismiss="modal" aria-hidden="true">Không</button>
            <button class="btn btn-primary" type="submit">Có</button>
        </div>
    </form>
</div>
<script>
    $(".container .mainnav li:eq(0)").addClass('active');
    // show modal
    $(".show-modal").click(function() {
        $("#myModalContent").load(this.href, function() {
            $("#myModal").modal({
                backdrop: 'static',
                keyboard: true
            }, 'show');
        });
        return false;
    });

    //Hủy đăng ký
    $(document).on("click", ".open-delModal", function() {
        var id = $(this).data('id');
        var route = "{{ route('student.cancel',1)}}";
        $("#abc").attr('action', route.substring(0, route.length - 1) + id);
    });
    $(document).ready(function() {
        @if(Session::has('message')) {
            !!Session::get('message') !!
        }
        @endif
    });
</script>
@endsection