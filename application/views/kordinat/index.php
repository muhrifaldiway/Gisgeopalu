<!--script google map-->
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&signed_in=true"></script>
<script>
$(document).on('click','#clearmap',clearmap)
.on('click','#simpandaftarkordinat',simpandaftarkordinat)
.on('click','#hapusmarkerkordinat',hapusmarkerkordinat)
.on('click','#viewmarkerkordinat',viewmarkerkordinat);
    var map;
    var markers = [];

    function initialize() {
        var mapOptions = {
        zoom: 14,
        // Center di kantor kabupaten kudus
        center: new google.maps.LatLng(-6.806428778495534, 110.84213197231293)
        };

        map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

        // Add a listener for the click event
        google.maps.event.addListener(map, 'rightclick', addLatLng);
        google.maps.event.addListener(map, "rightclick", function(event) {
          var lat = event.latLng.lat();
          var lng = event.latLng.lng();
          $('#latitude').val(lat);
          $('#longitude').val(lng);
          //alert(lat +" dan "+lng);
        });
    }

    /**
     * Handles click events on a map, and adds a new point to the marker.
     * @param {google.maps.MouseEvent} event
     */
    function addLatLng(event) {
        var marker = new google.maps.Marker({
        position: event.latLng,
        title: 'Simple GIS',
        map: map
        });
        markers.push(marker);
    }
    //membersihkan peta dari marker
    function clearmap(e){
        e.preventDefault();
        $('#latitude').val('');
        $('#longitude').val('');
        setMapOnAll(null);
    }
    //buat hapus marker
    function setMapOnAll(map) {
      for (var i = 0; i < markers.length; i++) {
        markers[i].setMap(map);
      }
      markers = [];
    }
    //end buat hapus marker

    function simpandaftarkordinat(e){
        e.preventDefault();
        var datakordinat = {'id_kordinat':$('#id_kordinat').val(),'latitude':$('#latitude').val(),'longitude':$('#longitude').val()};
        console.log(datakordinat);
        $.ajax({
            url : '<?php echo site_url("marker/simpandaftarkordinat") ?>',
            dataType : 'json',
            data : datakordinat,
            type : 'POST',
            success : function(data,status){
                if (data.status!='error') {
                    $('#daftarkordinat').load('<?php echo current_url()."/ #daftarkordinat > *" ?>');
                    alert(data.msg);
                    clearmap(e);
                }else{
                    alert(data.msg);
                }
            }
        })
    }
    function hapusmarkerkordinat(e){
        e.preventDefault();
        var datakordinat = {'id_kordinat':$(this).data('iddatakordinat')};
        $.ajax({
            url : '<?php echo site_url("marker/hapusmarkerkordinat") ?>',
            data : datakordinat,
            dataType : 'json',
            type : 'POST',
            success : function(data,status){
                if (data.status!='error') {
                    alert(data.msg);
                    $('#daftarkordinat').load('<?php echo current_url()."/ #daftarkordinat > *" ?>');
                    clearmap(e);
                }else{
                    alert(data.msg);
                }
            }
        })
    }
    function viewmarkerkordinat(e){
        e.preventDefault();
        var datakordinat = {'id_kordinat':$(this).data('iddatakordinat')};
        $.ajax({
            url : '<?php echo site_url("marker/viewmarkerkordinat") ?>',
            data : datakordinat,
            dataType : 'json',
            type : 'POST',
            success : function(data,status){
                if (data.status!='error') {
                    clearmap(e);
                    //load marker
                    $.each(data.msg,function(m,n){
                        var myLatLng = {lat: parseFloat(n["latitude"]), lng: parseFloat(n["longitude"])};
                        console.log(m,n);
                        $.each(data.datakordinat,function(k,v){
                            addMarker(v['nama'],myLatLng);
                        })
                        return false;
                    })
                    //end load marker
                }else{
                    alert(data.msg);
                }
            }
        })
    }
    // Menampilkan marker lokasi jembatan
    function addMarker(nama,location) {
        var marker = new google.maps.Marker({
            position: location,
            map: map,
            title : nama
        });
        markers.push(marker);
    }

    google.maps.event.addDomListener(window, 'load', initialize);
</script>
<!--end script google map-->
<div class="container">
    <div class="row">
        <div class="col-md-8 col-sm-8">
            <div class="panel panel-primary">
                <div class="panel-heading"><span class="glyphicon glyphicon-globe"></span> Peta</div>
                <div class="panel-body" style="height:300px;" id="map-canvas">
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-4">
            <div class="panel panel-primary">
                <div class="panel-heading"><span class="glyphicon glyphicon-list"></span> Daftar Koordinat</div>
                <div class="panel-body" style="min-height:300px;">
                    <form action="#">
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <label for="latitude">Latitude</label>
                                    <input type="text" class="form-control" name="latitude" id="latitude">
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <label for="longitude">Longitude</label>
                                    <input type="text" class="form-control" name="longitude" id="longitude">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="datakordinat">Data kordinat</label>
                            <?php if ($itemdatakordinat->num_rows()!=null) {
                                echo '<select name="id_kordinat" id="id_kordinat" class="form-control">';
                                foreach ($itemdatakordinat->result() as $datakordinat) {
                                    echo "<option value='".$datakordinat->id_kordinat."'>".$datakordinat->nama."</option>";
                                }
                                echo '</select>';
                            }else{
                                echo anchor('marker/kordinat', '<span class="glyphicon glyphicon-plus"></span> Tambah Data kordinat', 'class="btn btn-info form-control"');
                            } ?>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-info btn-sm" id="simpandaftarkordinat"><span class="glyphicon glyphicon-save"></span> Simpan</button>
                            <button class="btn btn-info btn-sm" id="clearmap"><span class="glyphicon glyphicon-globe"></span> ClearMap</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-12 col-sm-12">
            <div class="panel panel-primary">
                <div class="panel-heading"><span class="glyphicon glyphicon-th-list"></span> Daftar kordinat</div>
                <div class="panel-body" style="min-height:400px">
                    <table class="table">
                        <th>No</th>
                        <th>Data kordinat</th>
                        <th>Latitude</th>
                        <th>Longitude</th>
                        <th></th>
                        <tbody id="daftarkoordinatjembatan">
                            <?php
                            if ($itemkordinat->num_rows()!=null) {
                                $no = 1;
                                foreach ($itemdatakordinat->result() as $kordinat) {
                                    echo "<tr>";
                                    echo "<td>";
                                    echo $no++;
                                    echo "</td>";
                                    echo "<td>";
                                    echo $kordinat->nama;
                                    echo "</td>";
                                    echo "<td>";
                                    foreach ($itemkordinat->result() as $kordinat) {
                                        if ($kordinat->id_kordinat==$kordinat->id_kordinat) {
                                            echo $kordinat->latitude."</br>";
                                        }
                                    }
                                    echo "</td>";
                                    echo "<td>";
                                    foreach ($itemkordinat->result() as $kordinat) {
                                        if ($kordinat->id_kordinat==$kordinat->id_kordinat) {
                                            echo $kordinat->longitude."</br>";
                                        }
                                    }
                                    echo "</td>";
                                    echo "<td>";
                                    echo '<button class="btn-info btn btn-sm" id="viewmarkerjembatan" data-iddatakordinat="'.$kordinat->id_kordinat.'"><span class="glyphicon-globe glyphicon"></span> View marker</button> ';
                                    echo '<button class="btn-danger btn btn-sm" id="hapusmarkerjembatan" data-iddatakordinat="'.$kordinat->id_kordinat.'"><span class="glyphicon-remove glyphicon"></span></button>';
                                    echo "</td>";
                                    echo "</tr>";
                                }
                            }
                             ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
