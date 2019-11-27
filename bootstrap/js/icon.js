$(document).ready(function() {
      // executes when HTML-Document is loaded and DOM is ready
     console.log("document is ready"); 
     // document ready  
     });
     $(window).load(function() {
      // executes when complete page is fully loaded, including all frames, objects and images
     console.log("window is loaded"); 
     // window load  
     });
   
       // MDB Lightbox Init
          $(function () {
          $("#mdb-lightbox-ui").load("mdb-addons/mdb-lightbox-ui.html");
          });
   
        import {mdbContainer, mdbRow, mdbCol} from 'mdbvue';
        export default {
          components: {
            mdbContainer,
            mdbRow,
            mdbCol
          }
        }
    import { mdbModal, mdbModalHeader, mdbModalTitle, mdbModalBody, mdbModalFooter, mdbBtn } from 'mdbvue';
    export default {
      components: {
        mdbModal,
        mdbModalHeader,
        mdbModalTitle,
        mdbModalBody,
        mdbModalFooter,
        mdbBtn
      },
      data() {
        return {
          modal: false
        };
      }
    };

    import { mdbBtn } from 'mdbvue';
    export default {
        name: 'ButtonPage',
        components: {
            mdbBtn
        }
    }

    $(function () {
        $('#simple-color-picker').colorpicker();
    });

    var colorPicker = new iro.ColorPicker("#color-picker-container", {
      // Set the size of the color picker
      width: 220,
      // Set the initial color to pure red
      color: "#f00"
      });