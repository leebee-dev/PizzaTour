<?php include_once("header.php")?>

    <!-- Banner Area Starts -->
    <section class="banner-area banner-area2 contact-bg text-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="korean title"><span class="style-change">위치</span></h1>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner Area End -->


    <section class="welcome-area text-center section-padding2">
        <div class="container">
            <div class="row">
                <div class="contact-us-text col-lg-12">
                    <h2  class="korean prime-color">" 경기 파주시 광탄면 등원로 527</h2>
                    <br>
                    <h2  class="korean prime-color">광탄하나로마트 A동 "</h2>
                    <br>
                    <h3 class="korean" style="color: #777777;">피자투어 광탄하나로마트점</h3>
                    <br>
                    <a href="#" data-popup-open="call">
                        <h3 class="korean callnumber">
                            <i class="fa fa-phone"></i> 031-944-7733</h3>
                    </a>


                </div>
            </div>
        </div>
    </section>


    <!-- Map Area Starts -->
    <section class="map-area section-padding">
        <div class="container">
            <div class="wrap_content">
                <div class="wrap_map">
                    <div id="map" style="width:100%;height:100%"></div> <!-- 지도를 표시할 div 입니다 -->
                    <div class="wrap_button">
                        <a href="javascript:;" class="btn_comm btn_linkMap" target="_blank" onclick="moveKakaoMap(this)"><span class="screen_out">지도 크게보기</span></a> <!-- 지도 크게보기 버튼입니다 -->
                        <a href="javascript:;" class="btn_comm btn_resetMap" onclick="resetKakaoMap()"><span class="screen_out">지도 초기화</span></a> <!-- 지도 크게보기 버튼입니다 -->
                    </div>
                </div>
                <div class="wrap_roadview">
                    <div id="roadview" style="width:100%;height:100%"></div> <!-- 로드뷰를 표시할 div 입니다 -->
                    <div class="wrap_button">
                        <a href="javascript:;" class="btn_comm btn_linkRoadview" target="_blank" onclick="moveKakaoRoadview(this)"><span class="screen_out">로드뷰 크게보기</span></a> <!-- 로드뷰 크게보기 버튼입니다 -->
                        <a href="javascript:;" class="btn_comm btn_resetRoadview" onclick="resetRoadview()"><span class="screen_out">로드뷰 크게보기</span></a> <!-- 로드뷰 리셋 버튼입니다 -->
                    </div>
                </div>
            </div>
            <div id="clickLatlng"></div>
            
            <script type="text/javascript" src="//dapi.kakao.com/v2/maps/sdk.js?appkey=3a35f77bedcaf0bcad45393eb36658ee"></script>
            <script>
            var lat = 37.783000
            var lng = 126.844998
            var mapContainer = document.getElementById('map'), // 지도를 표시할 div 
                mapCenter = new kakao.maps.LatLng(lat, lng), // 지도의 중심 좌표
                mapOption = {
                    center: mapCenter, // 지도의 중심 좌표
                    level: 2 // 지도의 확대 레벨
                };
            
            // 지도를 표시할 div와  지도 옵션으로  지도를 생성합니다
            var map = new kakao.maps.Map(mapContainer, mapOption);

            // 커스텀 오버레이에 표출될 내용으로 HTML 문자열이나 document element가 가능합니다
            var content = '<div class="customoverlay">' +
                '  <a href="http://kko.to/eRoW_1bDB" target="_blank">' +
                '    <span class="title">피자투어 광탄하나로마트점 </span>' +
                '  </a>' +
                '</div>';

            // 커스텀 오버레이가 표시될 위치입니다 
            var position = new kakao.maps.LatLng(lat, lng);  

            // 커스텀 오버레이를 생성합니다
            var customOverlay = new kakao.maps.CustomOverlay({
                map: map,
                position: position,
                content: content,
                yAnchor: 1 
            });
            
            
            var rvContainer = document.getElementById('roadview'); // 로드뷰를 표시할 div
            var rv = new kakao.maps.Roadview(rvContainer); // 로드뷰 객체 생성
            var rc = new kakao.maps.RoadviewClient(); // 좌표를 통한 로드뷰의 panoid를 추출하기 위한 로드뷰 help객체 생성
            var rvResetValue = {} //로드뷰의 초기화 값을 저장할 변수
            rc.getNearestPanoId(mapCenter, 50, function(panoId) {
                rv.setPanoId(panoId, mapCenter);//좌표에 근접한 panoId를 통해 로드뷰를 실행합니다.
                rvResetValue.panoId = panoId;
            });
            
            // 로드뷰 초기화 이벤트
            kakao.maps.event.addListener(rv, 'init', function() {
            
                // 로드뷰에 올릴 마커를 생성합니다.
                var rMarker = new kakao.maps.Marker({
                    position: mapCenter,
                    map: rv //map 대신 rv(로드뷰 객체)로 설정하면 로드뷰에 올라갑니다.
                });

                var customOverlay = new kakao.maps.CustomOverlay({
                map: rv,
                position: position,
                content: content,
                yAnchor: 1 
                });

                // 로드뷰 마커가 중앙에 오도록 로드뷰의 viewpoint 조정 합니다.
                var projection = rv.getProjection(); // viewpoint(화면좌표)값을 추출할 수 있는 projection 객체를 가져옵니다.
                
                // 마커의 position과 altitude값을 통해 viewpoint값(화면좌표)를 추출합니다.
                var viewpoint = projection.viewpointFromCoords(rMarker.getPosition(), rMarker.getAltitude());
                rv.setViewpoint(viewpoint); //로드뷰에 뷰포인트를 설정합니다.
            
                //각 뷰포인트 값을 초기화를 위해 저장해 놓습니다.
                rvResetValue.pan = viewpoint.pan;
                rvResetValue.tilt = viewpoint.tilt;
                rvResetValue.zoom = viewpoint.zoom;
            });
            
            //지도 이동 이벤트 핸들러
            function moveKakaoMap(self){
                
                var center = map.getCenter(), 
                    lat = center.getLat(),
                    lng = center.getLng();
            
                self.href = 'https://map.kakao.com/link/map/' + encodeURIComponent('스페이스 닷원') + ',' + lat + ',' + lng; //Kakao 지도로 보내는 링크
            }
            
            //지도 초기화 이벤트 핸들러
            function resetKakaoMap(){
                map.setCenter(mapCenter); //지도를 초기화 했던 값으로 다시 셋팅합니다.
                map.setLevel(mapOption.level);
            }
            
            //로드뷰 이동 이벤트 핸들러
            function moveKakaoRoadview(self){
                var panoId = rv.getPanoId(); //현 로드뷰의 panoId값을 가져옵니다.
                var viewpoint = rv.getViewpoint(); //현 로드뷰의 viewpoint(pan,tilt,zoom)값을 가져옵니다.
                console.log(viewpoint)
                self.href = 'https://map.kakao.com/?panoid='+panoId+'&pan='+viewpoint.pan+'&tilt='+viewpoint.tilt+'&zoom='+viewpoint.zoom; //Kakao 지도 로드뷰로 보내는 링크
            }
            
            //로드뷰 초기화 이벤트 핸들러
            function resetRoadview(){
                //초기화를 위해 저장해둔 변수를 통해 로드뷰를 초기상태로 돌립니다.
                rv.setViewpoint({
                    pan: rvResetValue.pan, tilt: rvResetValue.tilt, zoom: rvResetValue.zoom
                });
                rv.setPanoId(rvResetValue.panoId);
            }
            </script>
        </div>
    </section>
    <!-- Map Area End -->


    <?php include_once("footer.php")?>
