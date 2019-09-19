
                       
                        var i = 0;
                        var txt = 'THIS IS A LOGIN PAGE BUILT BY THE DREAM DEV TEAM';
                        var speed = 100;
                        
                        function typeWriter() {
                          if (i < txt.length) {
                            document.getElementById("note").innerHTML += txt.charAt(i);
                            i++;
                            setTimeout(typeWriter, speed);
                          }
                        }
                   
