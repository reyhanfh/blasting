<form  enctype="multipart/form-data" action="{{ url('laporan/booking/exceldetail') }}" method="post">
    @csrf
       
    <input type="hidden" name="tglfrom" value="01/06/2024">
    <input type="hidden" name="tglto" value="30/06/2024"> 
    <input type="hidden" name="jenisreport" value="2">
    <input type="hidden" name="channel" value="0">   
    <div class="card-footer">
        <button type="submit" class="btn btn-primary">Submit</button>                
    </div>
</form>