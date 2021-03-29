// CONTAGEM REGRESSIVA JAVASCRIPT

var HH = 23;
                
                var MI = 59;
                
                var SS = 59;
                
                function atualizaContador() {
                
                var hoje = new Date();
                
                var todayd= hoje.getDate();
                
                var todaym= hoje.getMonth();
                
                var todayy= hoje.getFullYear();
                
                var futuro = new Date(todayy,todaym+1,todayd,HH,MI,SS);
                
                var ss = parseInt((futuro - hoje) / 1000);
                
                var mm = parseInt(ss / 60);
                
                var hh = parseInt(mm / 60);
                
                var dd = parseInt(hh / 24);
                
                ss = ss - (mm * 60);
                
                mm = mm - (hh * 60);
                
                hh = hh - (dd * 24);
                
                var faltam = '';
                
                faltam += (toString(hh).length) ? hh+' hr, ' : '';
                
                faltam += (toString(mm).length) ? mm+' min e ' : '';
                
                faltam += ss+' seg';
                
                if (dd+hh+mm+ss > 0) {
                
                document.getElementById('contador').innerHTML = faltam;
                
                setTimeout(atualizaContador,1000);
                
                } else {
                
                document.getElementById('contador').innerHTML = 'Esgotado';
                
                setTimeout(atualizaContador,1000);
                
                }
                
                }