
  
         $(function(){
        $('.komentar').keyup(function() {
            
            var characterCount = $(this).val().length,
                current = $('#current'),
                maximum = $('#maximum'),
                theCount = $('#the-count');
            
            current.text(characterCount);
        
            
            /*This isn't entirely necessary, just playin around*/
            if (characterCount < 70) {
            current.css('color', '#666');
            }
            if (characterCount > 70 && characterCount < 90) {
            current.css('color', '#6d5555');
            }
            if (characterCount > 90 && characterCount < 100) {
            current.css('color', '#793535');
            }
            if (characterCount > 100 && characterCount < 120) {
            current.css('color', '#841c1c');
            }
            if (characterCount > 120 && characterCount < 139) {
            current.css('color', '#8f0001');
            }
            
            if (characterCount >= 140) {
            maximum.css('color', '#8f0001');
            current.css('color', '#8f0001');
            theCount.css('font-weight','bold');
            } else {
            maximum.css('color','#666');
            theCount.css('font-weight','normal');
            }
            
                
        });


       
  
            $('.tombolTambahData').on('click', function(){
                $('#formModalLabel').html('Tambah Data Mahasiswa');
                $('.modal-footer button[type=submit]').html('Tambah Data');
            })
    
          
            $('.tampilModalUbah').on('click', function(){
               
                const id_js = $(this).data('id');
                
                
                
                    $.ajax({
                        url: "http://localhost/bukutamu/public/admin/getubah" ,
                        data: {id : id_js},
                        type:'post',
                        dataType :'json',
                        
                        success : function(data){
                           
                            $('#nama').val(data.nama);
                            $('#email').val(data.email);
                            $('#komentar').val(data.komentar);
                          
                        }
                        
                    })
            })
          
          
          })