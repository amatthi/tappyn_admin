<div class="container">
  <div class="row">
    <div class="col-md-9">
      <!-- <h3 class="page-header">Demo:</h3> -->
      <div class="img-container">
        <img src="<?php echo base_url('assets/images/picture2.jpg'); ?>" alt="Picture">
      </div>
    </div>
    <div class="col-md-3">
      <!-- <h3 class="page-header">Preview:</h3> -->
      <div class="docs-preview clearfix">
        <div class="img-preview preview-lg"></div>
        <div class="img-preview preview-md"></div>
        <div class="img-preview preview-sm"></div>
        <div class="img-preview preview-xs"></div>
      </div>

      <!-- <h3 class="page-header">Data:</h3> -->
      <div class="docs-data">
        <div class="input-group">
          <label class="input-group-addon" for="dataX">X</label>
          <input class="form-control" id="dataX" type="text" placeholder="x">
          <span class="input-group-addon">px</span>
        </div>
        <div class="input-group">
          <label class="input-group-addon" for="dataY">Y</label>
          <input class="form-control" id="dataY" type="text" placeholder="y">
          <span class="input-group-addon">px</span>
        </div>
        <div class="input-group">
          <label class="input-group-addon" for="dataWidth">Width</label>
          <input class="form-control" id="dataWidth" type="text" placeholder="width">
          <span class="input-group-addon">px</span>
        </div>
        <div class="input-group">
          <label class="input-group-addon" for="dataHeight">Height</label>
          <input class="form-control" id="dataHeight" type="text" placeholder="height">
          <span class="input-group-addon">px</span>
        </div>
        <div class="input-group">
          <label class="input-group-addon" for="dataRotate">Rotate</label>
          <input class="form-control" id="dataRotate" type="text" placeholder="rotate">
          <span class="input-group-addon">deg</span>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-9 docs-buttons">
      <!-- <h3 class="page-header">Toolbar:</h3> -->
      <div class="btn-group">
        <button class="btn btn-primary" data-method="setDragMode" data-option="move" type="button" title="Move">
          <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;setDragMode&quot;, &quot;move&quot;)">
                            <span class="fa fa-arrows"></span>
          </span>
        </button>
        <button class="btn btn-primary" data-method="setDragMode" data-option="crop" type="button" title="Crop">
          <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;setDragMode&quot;, &quot;crop&quot;)">
                            <span class="fa fa-crop"></span>
          </span>
        </button>
        <button class="btn btn-primary" data-method="zoom" data-option="0.1" type="button" title="Zoom In">
          <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;zoom&quot;, 0.1)">
                            <span class="fa fa-search-plus"></span>
          </span>
        </button>
        <button class="btn btn-primary" data-method="zoom" data-option="-0.1" type="button" title="Zoom Out">
          <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;zoom&quot;, -0.1)">
                            <span class="fa fa-search-minus"></span>
          </span>
        </button>
        <button class="btn btn-primary" data-method="rotate" data-option="-45" type="button" title="Rotate Left">
          <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;rotate&quot;, -45)">
                            <span class="fa fa-rotate-left"></span>
          </span>
        </button>
        <button class="btn btn-primary" data-method="rotate" data-option="45" type="button" title="Rotate Right">
          <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;rotate&quot;, 45)">
                            <span class="fa fa-rotate-right"></span>
          </span>
        </button>
      </div>

      <div class="btn-group">
        <button class="btn btn-primary" data-method="disable" type="button" title="Disable">
          <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;disable&quot;)">
                            <span class="fa fa-lock"></span>
          </span>
        </button>
        <button class="btn btn-primary" data-method="enable" type="button" title="Enable">
          <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;enable&quot;)">
                            <span class="fa fa-unlock"></span>
          </span>
        </button>
        <button class="btn btn-primary" data-method="clear" type="button" title="Clear">
          <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;clear&quot;)">
                            <span class="fa fa-close"></span>
          </span>
        </button>
        <button class="btn btn-primary" data-method="reset" type="button" title="Reset">
          <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;reset&quot;)">
                            <span class="fa fa-refresh"></span>
          </span>
        </button>
        <label class="btn btn-primary btn-upload" for="inputImage" title="Upload image file">
          <input class="sr-only" id="inputImage" name="file" type="file" accept="image/*">
          <span class="docs-tooltip" data-toggle="tooltip" title="Import image with Blob URLs">
                            <span class="fa fa-upload"></span>
          </span>
        </label>
        <button class="btn btn-primary" data-method="destroy" type="button" title="Destroy">
          <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;destroy&quot;)">
                            <span class="fa fa-power-off"></span>
          </span>
        </button>
      </div>

      <div class="btn-group btn-group-crop">
        <button class="btn btn-primary" data-method="getDataURL" type="button">
          <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;getDataURL&quot;)">
                            Get Data URL
                          </span>
        </button>
        <button class="btn btn-primary" data-method="getDataURL" data-option="image/jpeg" type="button">
          <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;getDataURL&quot;, &quot;image/jpeg&quot;)">
                            JPG
                          </span>
        </button>
        <!-- <button class="btn btn-primary" data-method="getDataURL" data-option="image/webp" type="button">
                          <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;getDataURL&quot;, &quot;image/webp&quot;)">
                            WEBP
                          </span>
                        </button> -->
        <button class="btn btn-primary" data-method="getDataURL" data-option="{ &quot;width&quot;: 160, &quot;height&quot;: 90 }" type="button">
          <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;getDataURL&quot;, { &quot;width&quot;: 160, &quot;height&quot;: 90 })">
                            160 &times; 90
                          </span>
        </button>
        <button class="btn btn-primary" data-method="getDataURL" data-option="{ &quot;width&quot;: 320, &quot;height&quot;: 180 }" type="button">
          <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;getDataURL&quot;, { &quot;width&quot;: 320, &quot;height&quot;: 180 })">
                            320 &times; 180
                          </span>
        </button>
      </div>

      <!-- Show the cropped image in modal -->
      <div class="modal fade docs-cropped" id="getDataURLModal" aria-hidden="true" aria-labelledby="getDataURLTitle" role="dialog" tabindex="-1">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button class="close" data-dismiss="modal" type="button" aria-hidden="true">&times;</button>
              <h4 class="modal-title" id="getDataURLTitle">Cropped</h4>
            </div>
            <div class="modal-body"></div>
            <!-- <div class="modal-footer">
                              <button class="btn btn-primary" data-dismiss="modal" type="button">Close</button>
                            </div> -->
          </div>
        </div>
      </div>
      <!-- /.modal -->

      <div class="btn-group">
        <button class="btn btn-primary" data-method="getData" data-option="" data-target="#putData" type="button">
          <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;getData&quot;)">
                            Get Data
                          </span>
        </button>
        <button class="btn btn-primary" data-method="getData" data-option="true" data-target="#putData" type="button">
          <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;getData&quot;, true)">
                            Rounded
                          </span>
        </button>
      </div>
      <div class="btn-group">
        <button class="btn btn-primary" data-method="getImageData" data-option="" data-target="#putData" type="button">
          <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;getImageData&quot;)">
                            Get Image Data
                          </span>
        </button>
        <button class="btn btn-primary" data-method="getImageData" data-option="true" data-target="#putData" type="button">
          <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;getImageData&quot;, true)">
                            All
                          </span>
        </button>
      </div>
      <button class="btn btn-primary" data-method="setImageData" data-target="#putData" type="button">
        <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;setImageData&quot;, data)">
                          Set Image Data
                        </span>
      </button>
      <button class="btn btn-primary" data-method="getCropBoxData" data-option="" data-target="#putData" type="button">
        <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;getCropBoxData&quot;)">
                          Get Crop Box Data
                        </span>
      </button>
      <button class="btn btn-primary" data-method="setCropBoxData" data-target="#putData" type="button">
        <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;setCropBoxData&quot;, data)">
                          Set Crop Box Data
                        </span>
      </button>
      <input class="form-control" id="putData" type="text" placeholder="Get data to here or set data with this value">

    </div>
    <!-- /.docs-buttons -->

    <div class="col-md-3 docs-toggles">
      <!-- <h3 class="page-header">Toggles:</h3> -->
      <div class="btn-group btn-group-justified" data-toggle="buttons">
        <label class="btn btn-primary active" data-method="setAspectRatio" data-option="1.7777777777777777" title="Set Aspect Ratio">
          <input class="sr-only" id="aspestRatio1" name="aspestRatio" value="1.7777777777777777" type="radio">
          <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;setAspectRatio&quot;, 16 / 9)">
                            16:9
                          </span>
        </label>
        <label class="btn btn-primary" data-method="setAspectRatio" data-option="1.3333333333333333" title="Set Aspect Ratio">
          <input class="sr-only" id="aspestRatio2" name="aspestRatio" value="1.3333333333333333" type="radio">
          <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;setAspectRatio&quot;, 4 / 3)">
                            4:3
                          </span>
        </label>
        <label class="btn btn-primary" data-method="setAspectRatio" data-option="1" title="Set Aspect Ratio">
          <input class="sr-only" id="aspestRatio3" name="aspestRatio" value="1" type="radio">
          <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;setAspectRatio&quot;, 1 / 1)">
                            1:1
                          </span>
        </label>
        <label class="btn btn-primary" data-method="setAspectRatio" data-option="0.6666666666666666" title="Set Aspect Ratio">
          <input class="sr-only" id="aspestRatio4" name="aspestRatio" value="0.6666666666666666" type="radio">
          <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;setAspectRatio&quot;, 2 / 3)">
                            2:3
                          </span>
        </label>
        <label class="btn btn-primary" data-method="setAspectRatio" data-option="NaN" title="Set Aspect Ratio">
          <input class="sr-only" id="aspestRatio5" name="aspestRatio" value="NaN" type="radio">
          <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;setAspectRatio&quot;, NaN)">
                            Free
                          </span>
        </label>
      </div>

      <div class="dropdown dropup docs-options">
        <button class="btn btn-primary btn-block dropdown-toggle" id="toggleOptions" type="button" data-toggle="dropdown" aria-expanded="true">
          Toggle Options
          <span class="caret"></span>
        </button>
        <ul class="dropdown-menu" role="menu" aria-labelledby="toggleOptions">
          <li role="presentation">
            <label class="checkbox-inline">
              <input type="checkbox" name="option" value="global" checked> global
            </label>
          </li>
          <li role="presentation">
            <label class="checkbox-inline">
              <input type="checkbox" name="option" value="responsive" checked> responsive
            </label>
          </li>
          <li role="presentation">
            <label class="checkbox-inline">
              <input type="checkbox" name="option" value="checkImageOrigin" checked> checkImageOrigin
            </label>
          </li>

          <li role="presentation">
            <label class="checkbox-inline">
              <input type="checkbox" name="option" value="modal" checked> modal
            </label>
          </li>
          <li role="presentation">
            <label class="checkbox-inline">
              <input type="checkbox" name="option" value="guides" checked> guides
            </label>
          </li>
          <li role="presentation">
            <label class="checkbox-inline">
              <input type="checkbox" name="option" value="highlight" checked> highlight
            </label>
          </li>
          <li role="presentation">
            <label class="checkbox-inline">
              <input type="checkbox" name="option" value="background" checked> background
            </label>
          </li>

          <li role="presentation">
            <label class="checkbox-inline">
              <input type="checkbox" name="option" value="autoCrop" checked> autoCrop
            </label>
          </li>
          <li role="presentation">
            <label class="checkbox-inline">
              <input type="checkbox" name="option" value="dragCrop" checked> dragCrop
            </label>
          </li>
          <li role="presentation">
            <label class="checkbox-inline">
              <input type="checkbox" name="option" value="movable" checked> movable
            </label>
          </li>
          <li role="presentation">
            <label class="checkbox-inline">
              <input type="checkbox" name="option" value="resizable" checked> resizable
            </label>
          </li>
          <li role="presentation">
            <label class="checkbox-inline">
              <input type="checkbox" name="option" value="rotatable" checked> rotatable
            </label>
          </li>
          <li role="presentation">
            <label class="checkbox-inline">
              <input type="checkbox" name="option" value="zoomable" checked> zoomable
            </label>
          </li>
          <li role="presentation">
            <label class="checkbox-inline">
              <input type="checkbox" name="option" value="touchDragZoom" checked> touchDragZoom
            </label>
          </li>
          <li role="presentation">
            <label class="checkbox-inline">
              <input type="checkbox" name="option" value="mouseWheelZoom" checked> mouseWheelZoom
            </label>
          </li>
        </ul>
      </div>
      <!-- /.dropdown -->
    </div>
    <!-- /.docs-toggles -->
  </div>
</div>

<script src="<?php echo base_url('assets/js/cropping/cropper.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/cropping/main2.js'); ?>"></script>
