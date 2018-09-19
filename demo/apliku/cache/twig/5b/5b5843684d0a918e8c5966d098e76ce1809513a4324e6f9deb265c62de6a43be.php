<?php

/* karyawan/datalist.twig */
class __TwigTemplate_a4f2d9d616c9a9263472a0652553175ed24be302a11288f1ae920ee8860db75a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layouts/master_layouts.twig", "karyawan/datalist.twig", 1);
        $this->blocks = array(
            'main_content' => array($this, 'block_main_content'),
            'custom_js' => array($this, 'block_custom_js'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layouts/master_layouts.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_main_content($context, array $blocks = array())
    {
        // line 4
        echo "
<div class=\"container-fluid\">
   <div class=\"block-header\">

   </div>

   <div class=\"row clearfix\">
      <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
         <div class=\"card\">
            <div class=\"body\">
               <div class=\"block-header\" align=\"center\">
                  <b>Data Guru / Karyawan</b>
               </div>
               <div class=\"table-responsive\">
                  <table class=\"table table-bordered table-striped table-hover dataTable\" id=\"data_karyawan\">
                     <thead>
                        <tr>
                           <th>NIK</th>
                           <th>Nama</th>
                           <th>Kota Lahir</th>
                           <th>Alamat</th>
                           <th>Kota</th>
                           <th>Telephon</th>
                           <th>Hapus</th>
                        </tr>
                     </thead>

                     <tbody id=\"show_data\">
                        <?php \$i = 1 ?>
                        <?php foreach(\$data as \$m): ?>
                        <tr>
                           <td>
                              <?php echo \$m->nik ?>
                              </a>
                           </td>
                           <td>
                              <?php echo \$m->nama ?>
                           </td>
                           <td>
                              <?php echo \$m->kotalahir ?>
                           </td>
                           <td>
                              <?php echo \$m->alamat ?>
                           </td>
                           <td>
                              <?php echo \$m->kota ?>
                           </td>
                           <td>
                              <?php echo \$m->nohp1 ?>
                           </td>
                           <td align=\"center\">
                              <button type=\"button\" class=\"btn btn-primary waves-effect\" data-toggle=\"modal\" data-target=\"#modal_update_biodata_karyawan\">
                                 <input type=\"hidden\" name=\"nis\">
                                 <i class=\"material-icons\">update</i>
                              </button>

                              <a href=\"<?php echo base_url();?>index.php/karyawan/hapus/<?php echo \$m->nik ?>\" class=\"btn btn-primary waves-effect\">
                                 <i class=\"material-icons\">delete_forever</i>
                              </a>
                           </td>
                        </tr>
                        <?php endforeach ?>

                     </tbody>
                  </table>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>

<div id=\"modal_update_biodata_karyawan\" class=\"modal fade\" role=\"dialog\">
   <div class=\"modal-dialog\">

      <!-- Modal content-->
      <div class=\"modal-content\">
         <div class=\"modal-header\">
            <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
            <h2 class=\"modal-title\" id=\"nama_karyawan\">Update Data Karyawan</h4>
         </div>

         <div class=\"modal-body\"> 
            <!-- Nav tabs -->
            <ul class=\"nav nav-tabs tab-nav-right\" role=\"tablist\">
               <li role=\"presentation\" class=\"active\"><a href=\"#biodata_karyawan\" data-toggle=\"tab\">KARYAWAN</a></li>
               <li role=\"presentation\"><a href=\"#biodata_alamat_karyawan\" data-toggle=\"tab\">ALAMAT</a></li>
            </ul>

            <!-- Tab panes -->
            <form method=\"POST\" id=\"sort_karyawan\">
               <input type=\"hidden\" id=\"csrf\" name=\"";
        // line 95
        echo twig_escape_filter($this->env, (isset($context["csrf_name"]) ? $context["csrf_name"] : null), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, (isset($context["csrf_hash"]) ? $context["csrf_hash"] : null), "html", null, true);
        echo "\">
            </form>
            <form method=\"POST\" id=\"update_biodata_karyawan\" enctype=\"multipart/form-data\">
               <div class=\"tab-content\" style=\"padding: 15px 0\">
                  <div role=\"tabpanel\" class=\"tab-pane fade in active\" id=\"biodata_karyawan\">
                     <div class=\"row\">
                        <div class=\"col-sm-8\">
                           <b>Nama Guru / Karyawan</b>
                           <div class=\"form-group\">
                              <div class=\"form-line\">
                                 <input id=\"nama\" name=\"nama\" type=\"text\" class=\"form-control\" />
                                 <input type=\"hidden\" name=\"nik\" id=\"nik\">
                              </div>
                           </div>
                        </div>

                        <div class=\"col-sm-4\">
                           <b>Kota Lahir</b>
                           <div class=\"form-group\">
                              <div class=\"form-line\">
                                 <input id=\"kotalahir\" name=\"kotalahir\" type=\"text\" class=\"form-control\" />
                              </div>
                           </div>
                        </div>
                     </div>

                     <div class=\"row\">
                        <div class=\"col-sm-3\">
                           <b>Tanggal Lahir</b>
                           <div class=\"form-group\">
                              <input type=\"text\" class=\"form-control\" name=\"tanggallahir\" id=\"tanggalInput\" value=\"";
        // line 125
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y-m-d"), "html", null, true);
        echo "\" required />
                           </div>
                        </div>


                        <div class=\"col-sm-3\">
                           <b>Jenis Kelamin</b>
                           <div class=\"form-group\">
                              <select id=\"gender\" name=\"gender\" class=\"form-control show-tick\">
                                 <option value=\"Pria\">Pria</option>
                                 <option value=\"Wanita\">Wanita</option>
                              </select>
                           </div>
                        </div>

                        <div class=\"col-sm-3\">
                           <b>Golongan Darah</b>
                           <div class=\"form-group\">
                              <select id=\"golongandarah\" name=\"golongandarah\" class=\"form-control show-tick\">
                                 <option value=\"A\">A</option>
                                 <option value=\"B\">B</option>
                                 <option value=\"AB\">AB</option>
                                 <option value=\"O\">O</option>
                              </select>
                           </div>
                        </div>

                        <div class=\"col-sm-3\">
                           <b>Status</b>
                           <select id=\"statusnikah\" name=\"statusnikah\" class=\"form-control show-tick\">
                              <option value=\"Bujang\">Bujang</option>
                              <option value=\"Menikah\">Menikah</option>
                              <option value=\"Janda\">Janda</option>
                              <option value=\"Duda\">Duda</option>
                           </select>
                        </div>
                     </div>

                     <div class=\"row\">
                        <div class=\"col-sm-4\">
                           <b>Pendidikan</b>
                           <div class=\"form-group\">
                              <div class=\"form-line\">
                                 <select id=\"pendidikanterakhir\" name=\"pendidikanterakhir\" class=\"form-control show-tick\">
                                    <option value=\"SD\">SD</option>
                                    <option value=\"SLTP\">SLTP</option>
                                    <option value=\"SLTA\">SLTA</option>
                                    <option value=\"D1-D3\">D1-D3</option>
                                    <option value=\"S1\">S1</option>
                                    <option value=\"S2\">S2</option>
                                    <option value=\"S3\">S3</option>
                                 </select>
                              </div>
                           </div>
                        </div>
                        <div class=\"col-sm-4\">
                           <b>Jabatan</b>
                           <div class=\"form-group\">
                              <div class=\"form-line\">
                                 <input id=\"jabatan\" name=\"jabatan\" type=\"text\" class=\"form-control\" />
                              </div>
                           </div>
                        </div>
                        <div class=\"col-sm-4\">
                           <b>No HP</b>
                           <div class=\"form-group\">
                              <div class=\"form-line\">
                                 <input id=\"nohp1\" name=\"nohp1\" type=\"text\" class=\"form-control\" />
                              </div>
                           </div>
                        </div>
                     </div>

                  </div>
                  <div role=\"tabpanel\" class=\"tab-pane fade\" id=\"biodata_alamat_karyawan\">

                     <div class=\"row\">
                        <div class=\"col-sm-6\">
                           <b>Alamat</b>
                           <div class=\"form-group\">
                              <div class=\"form-line\">
                                 <input id=\"alamat\" name=\"alamat\" type=\"text\" class=\"form-control\" />
                              </div>
                           </div>
                        </div>
                        <div class=\"col-sm-6\">
                           <b>Kelurahan</b>
                           <div class=\"form-group\">
                              <div class=\"form-line\">
                                 <input id=\"kelurahan\" name=\"kelurahan\" type=\"text\" class=\"form-control\" />
                              </div>
                           </div>
                        </div>
                     </div>

                     <div class=\"row\">
                        <div class=\"col-sm-6\">
                           <b>Kecamatan</b>
                           <div class=\"form-group\">
                              <div class=\"form-line\">
                                 <input id=\"kecamatan\" name=\"kecamatan\" type=\"text\" class=\"form-control\" />
                              </div>
                           </div>
                        </div>
                        <div class=\"col-sm-6\">
                           <b>Kota</b>
                           <div class=\"form-group\">
                              <div class=\"form-line\">
                                 <input id=\"kota\" name=\"kota\" type=\"text\" class=\"form-control\" />
                              </div>
                           </div>
                        </div>
                     </div>

                     <div class=\"row\">
                        <div class=\"col-sm-6\">
                           <b>Provinsi</b>
                           <div class=\"form-group\">
                              <div class=\"form-line\">
                                 <input id=\"provinsi\" name=\"provinsi\" type=\"text\" class=\"form-control\" />
                              </div>
                           </div>
                        </div>
                     </div>

                  </div>
               </div>

         </div>


         <div class=\"modal-footer\">
            <div class=\"progress\" style=\"display: none;\" id=\"progress\">
               <div id=\"progress-bar\" class=\"progress-bar bg-teal progress-bar-striped\" role=\"progressbar\" aria-valuenow=\"0\" aria-valuemax=\"100\"></div>
            </div>
            <input type=\"hidden\" id=\"csrf\" name=\"";
        // line 260
        echo twig_escape_filter($this->env, (isset($context["csrf_name"]) ? $context["csrf_name"] : null), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, (isset($context["csrf_hash"]) ? $context["csrf_hash"] : null), "html", null, true);
        echo "\">
            <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Batal</button>

            <input type=\"submit\" id=\"submit_update_biodata_karyawan\" name=\"submit_update_biodata_karyawan\" value=\"Update\" class=\"btn btn-primary waves-effect\">
            </form>
         </div>

      </div>

   </div>
</div>
";
    }

    // line 273
    public function block_custom_js($context, array $blocks = array())
    {
        // line 274
        echo "
";
        // line 275
        $this->loadTemplate("layouts/datatable.twig", "karyawan/datalist.twig", 275)->display($context);
        // line 276
        echo "
";
        // line 277
        $this->loadTemplate("layouts/form-validation.twig", "karyawan/datalist.twig", 277)->display($context);
        // line 278
        echo "
";
    }

    public function getTemplateName()
    {
        return "karyawan/datalist.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  329 => 278,  327 => 277,  324 => 276,  322 => 275,  319 => 274,  316 => 273,  298 => 260,  160 => 125,  125 => 95,  32 => 4,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'layouts/master_layouts.twig' %}

{% block main_content %}

<div class=\"container-fluid\">
   <div class=\"block-header\">

   </div>

   <div class=\"row clearfix\">
      <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
         <div class=\"card\">
            <div class=\"body\">
               <div class=\"block-header\" align=\"center\">
                  <b>Data Guru / Karyawan</b>
               </div>
               <div class=\"table-responsive\">
                  <table class=\"table table-bordered table-striped table-hover dataTable\" id=\"data_karyawan\">
                     <thead>
                        <tr>
                           <th>NIK</th>
                           <th>Nama</th>
                           <th>Kota Lahir</th>
                           <th>Alamat</th>
                           <th>Kota</th>
                           <th>Telephon</th>
                           <th>Hapus</th>
                        </tr>
                     </thead>

                     <tbody id=\"show_data\">
                        <?php \$i = 1 ?>
                        <?php foreach(\$data as \$m): ?>
                        <tr>
                           <td>
                              <?php echo \$m->nik ?>
                              </a>
                           </td>
                           <td>
                              <?php echo \$m->nama ?>
                           </td>
                           <td>
                              <?php echo \$m->kotalahir ?>
                           </td>
                           <td>
                              <?php echo \$m->alamat ?>
                           </td>
                           <td>
                              <?php echo \$m->kota ?>
                           </td>
                           <td>
                              <?php echo \$m->nohp1 ?>
                           </td>
                           <td align=\"center\">
                              <button type=\"button\" class=\"btn btn-primary waves-effect\" data-toggle=\"modal\" data-target=\"#modal_update_biodata_karyawan\">
                                 <input type=\"hidden\" name=\"nis\">
                                 <i class=\"material-icons\">update</i>
                              </button>

                              <a href=\"<?php echo base_url();?>index.php/karyawan/hapus/<?php echo \$m->nik ?>\" class=\"btn btn-primary waves-effect\">
                                 <i class=\"material-icons\">delete_forever</i>
                              </a>
                           </td>
                        </tr>
                        <?php endforeach ?>

                     </tbody>
                  </table>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>

<div id=\"modal_update_biodata_karyawan\" class=\"modal fade\" role=\"dialog\">
   <div class=\"modal-dialog\">

      <!-- Modal content-->
      <div class=\"modal-content\">
         <div class=\"modal-header\">
            <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
            <h2 class=\"modal-title\" id=\"nama_karyawan\">Update Data Karyawan</h4>
         </div>

         <div class=\"modal-body\"> 
            <!-- Nav tabs -->
            <ul class=\"nav nav-tabs tab-nav-right\" role=\"tablist\">
               <li role=\"presentation\" class=\"active\"><a href=\"#biodata_karyawan\" data-toggle=\"tab\">KARYAWAN</a></li>
               <li role=\"presentation\"><a href=\"#biodata_alamat_karyawan\" data-toggle=\"tab\">ALAMAT</a></li>
            </ul>

            <!-- Tab panes -->
            <form method=\"POST\" id=\"sort_karyawan\">
               <input type=\"hidden\" id=\"csrf\" name=\"{{ csrf_name }}\" value=\"{{ csrf_hash }}\">
            </form>
            <form method=\"POST\" id=\"update_biodata_karyawan\" enctype=\"multipart/form-data\">
               <div class=\"tab-content\" style=\"padding: 15px 0\">
                  <div role=\"tabpanel\" class=\"tab-pane fade in active\" id=\"biodata_karyawan\">
                     <div class=\"row\">
                        <div class=\"col-sm-8\">
                           <b>Nama Guru / Karyawan</b>
                           <div class=\"form-group\">
                              <div class=\"form-line\">
                                 <input id=\"nama\" name=\"nama\" type=\"text\" class=\"form-control\" />
                                 <input type=\"hidden\" name=\"nik\" id=\"nik\">
                              </div>
                           </div>
                        </div>

                        <div class=\"col-sm-4\">
                           <b>Kota Lahir</b>
                           <div class=\"form-group\">
                              <div class=\"form-line\">
                                 <input id=\"kotalahir\" name=\"kotalahir\" type=\"text\" class=\"form-control\" />
                              </div>
                           </div>
                        </div>
                     </div>

                     <div class=\"row\">
                        <div class=\"col-sm-3\">
                           <b>Tanggal Lahir</b>
                           <div class=\"form-group\">
                              <input type=\"text\" class=\"form-control\" name=\"tanggallahir\" id=\"tanggalInput\" value=\"{{ \"now\"| date(\"Y-m-d\") }}\" required />
                           </div>
                        </div>


                        <div class=\"col-sm-3\">
                           <b>Jenis Kelamin</b>
                           <div class=\"form-group\">
                              <select id=\"gender\" name=\"gender\" class=\"form-control show-tick\">
                                 <option value=\"Pria\">Pria</option>
                                 <option value=\"Wanita\">Wanita</option>
                              </select>
                           </div>
                        </div>

                        <div class=\"col-sm-3\">
                           <b>Golongan Darah</b>
                           <div class=\"form-group\">
                              <select id=\"golongandarah\" name=\"golongandarah\" class=\"form-control show-tick\">
                                 <option value=\"A\">A</option>
                                 <option value=\"B\">B</option>
                                 <option value=\"AB\">AB</option>
                                 <option value=\"O\">O</option>
                              </select>
                           </div>
                        </div>

                        <div class=\"col-sm-3\">
                           <b>Status</b>
                           <select id=\"statusnikah\" name=\"statusnikah\" class=\"form-control show-tick\">
                              <option value=\"Bujang\">Bujang</option>
                              <option value=\"Menikah\">Menikah</option>
                              <option value=\"Janda\">Janda</option>
                              <option value=\"Duda\">Duda</option>
                           </select>
                        </div>
                     </div>

                     <div class=\"row\">
                        <div class=\"col-sm-4\">
                           <b>Pendidikan</b>
                           <div class=\"form-group\">
                              <div class=\"form-line\">
                                 <select id=\"pendidikanterakhir\" name=\"pendidikanterakhir\" class=\"form-control show-tick\">
                                    <option value=\"SD\">SD</option>
                                    <option value=\"SLTP\">SLTP</option>
                                    <option value=\"SLTA\">SLTA</option>
                                    <option value=\"D1-D3\">D1-D3</option>
                                    <option value=\"S1\">S1</option>
                                    <option value=\"S2\">S2</option>
                                    <option value=\"S3\">S3</option>
                                 </select>
                              </div>
                           </div>
                        </div>
                        <div class=\"col-sm-4\">
                           <b>Jabatan</b>
                           <div class=\"form-group\">
                              <div class=\"form-line\">
                                 <input id=\"jabatan\" name=\"jabatan\" type=\"text\" class=\"form-control\" />
                              </div>
                           </div>
                        </div>
                        <div class=\"col-sm-4\">
                           <b>No HP</b>
                           <div class=\"form-group\">
                              <div class=\"form-line\">
                                 <input id=\"nohp1\" name=\"nohp1\" type=\"text\" class=\"form-control\" />
                              </div>
                           </div>
                        </div>
                     </div>

                  </div>
                  <div role=\"tabpanel\" class=\"tab-pane fade\" id=\"biodata_alamat_karyawan\">

                     <div class=\"row\">
                        <div class=\"col-sm-6\">
                           <b>Alamat</b>
                           <div class=\"form-group\">
                              <div class=\"form-line\">
                                 <input id=\"alamat\" name=\"alamat\" type=\"text\" class=\"form-control\" />
                              </div>
                           </div>
                        </div>
                        <div class=\"col-sm-6\">
                           <b>Kelurahan</b>
                           <div class=\"form-group\">
                              <div class=\"form-line\">
                                 <input id=\"kelurahan\" name=\"kelurahan\" type=\"text\" class=\"form-control\" />
                              </div>
                           </div>
                        </div>
                     </div>

                     <div class=\"row\">
                        <div class=\"col-sm-6\">
                           <b>Kecamatan</b>
                           <div class=\"form-group\">
                              <div class=\"form-line\">
                                 <input id=\"kecamatan\" name=\"kecamatan\" type=\"text\" class=\"form-control\" />
                              </div>
                           </div>
                        </div>
                        <div class=\"col-sm-6\">
                           <b>Kota</b>
                           <div class=\"form-group\">
                              <div class=\"form-line\">
                                 <input id=\"kota\" name=\"kota\" type=\"text\" class=\"form-control\" />
                              </div>
                           </div>
                        </div>
                     </div>

                     <div class=\"row\">
                        <div class=\"col-sm-6\">
                           <b>Provinsi</b>
                           <div class=\"form-group\">
                              <div class=\"form-line\">
                                 <input id=\"provinsi\" name=\"provinsi\" type=\"text\" class=\"form-control\" />
                              </div>
                           </div>
                        </div>
                     </div>

                  </div>
               </div>

         </div>


         <div class=\"modal-footer\">
            <div class=\"progress\" style=\"display: none;\" id=\"progress\">
               <div id=\"progress-bar\" class=\"progress-bar bg-teal progress-bar-striped\" role=\"progressbar\" aria-valuenow=\"0\" aria-valuemax=\"100\"></div>
            </div>
            <input type=\"hidden\" id=\"csrf\" name=\"{{ csrf_name }}\" value=\"{{ csrf_hash }}\">
            <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Batal</button>

            <input type=\"submit\" id=\"submit_update_biodata_karyawan\" name=\"submit_update_biodata_karyawan\" value=\"Update\" class=\"btn btn-primary waves-effect\">
            </form>
         </div>

      </div>

   </div>
</div>
{% endblock %}

{% block custom_js %}

{% include 'layouts/datatable.twig' %}

{% include 'layouts/form-validation.twig' %}

{% endblock %}
", "karyawan/datalist.twig", "/home/sipy1897/public_html/demo/apliku/views/karyawan/datalist.twig");
    }
}
