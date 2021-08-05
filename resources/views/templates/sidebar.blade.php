 <div class="sidebar" data-color="blue">
     <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
     <div class="logo">
         <a href="http://www.creative-tim.com" class="simple-text logo-normal">
             Klinik
         </a>
     </div>
     <div class="sidebar-wrapper" id="sidebar-wrapper">
         <ul class="nav">
             <li class="active ">
                 <a href="{{ route('add.pasien.view') }}">
                     <i class="now-ui-icons design_app"></i>
                     <p>Data Pasien</p>
                 </a>
             </li>
             <li>
                 <a href="{{ route('add.poli.view') }}">
                     <i class="now-ui-icons education_atom"></i>
                     <p>Data Poli</p>
                 </a>
             </li>
             <li>
                 <a href="{{ route('add.dokter.view') }}">
                     <i class="now-ui-icons location_map-big"></i>
                     <p>Data Dokter</p>
                 </a>
             </li>
             <li>
                 <a href="{{ route('add.berobat.view') }}">
                     <i class="now-ui-icons ui-1_bell-53"></i>
                     <p>Data Berobat</p>
                 </a>
             </li>
             <li>
                 <hr class="bg-white">
             </li>
             <li>
                 <a href="/dokter">
                     <i class="now-ui-icons design_app"></i>
                     <p>List Dokter</p>
                 </a>
             </li>
             <li>
                 <a href="/">
                     <i class="now-ui-icons education_atom"></i>
                     <p>List Pasien</p>
                 </a>
             </li>
             <li>
                 <a href="/berobat">
                     <i class="now-ui-icons location_map-big"></i>
                     <p>List Data Berobat</p>
                 </a>
             </li>
         </ul>
     </div>
 </div>
