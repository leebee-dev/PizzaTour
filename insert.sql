
-- Insert Menu --

--pizza
START TRANSACTION;
INSERT INTO Menu(name, class, origin,img) VALUES("더블치즈피자",1, NULL,"pizza_1.png");
INSERT INTO Price(idx,M,L,Big) VALUES(LAST_INSERT_ID(),7900,9900,16000);
INSERT INTO Nutrition VALUES(LAST_INSERT_ID(),278.1, 36.9, 3.9, 14.4, 8.1, 4.8, 0.2, 22.3, 517.8);
INSERT INTO Menu(name, class, origin,img) VALUES("페퍼로니피자",1, "돼지고기: 국내산","pizza_2.png");
INSERT INTO Price(idx,M,L,Big) VALUES(LAST_INSERT_ID(),9000, 11000, 17000);
INSERT INTO Nutrition VALUES(LAST_INSERT_ID(),303.9, 30.2, 8.2, 13.6, 14.3, 8.2, 0.3, 15.7, 543.6);
INSERT INTO Menu(name, class, origin,img) VALUES("슈퍼콤비네이션피자",1, "돼지고기: 국내산, 수입산(스페인, 미국 등)","pizza_3.png");
INSERT INTO Price(idx,M,L,Big) VALUES(LAST_INSERT_ID(),11000, 13000, 21000);
INSERT INTO Nutrition VALUES(LAST_INSERT_ID(),261.7, 33.4, 2.8, 12.0, 8.9, 4.1, 0.2, 31.0, 471.7);
INSERT INTO Menu(name, class, origin,img) VALUES("직화수제불고기피자",1, "돼지고기: 국내산 / 쇠고기: 호주산" ,"pizza_4.png");
INSERT INTO Price(idx,M,L,Big) VALUES(LAST_INSERT_ID(),11000, 13000, 21000);
INSERT INTO Nutrition VALUES(LAST_INSERT_ID(),258.7, 33.1, 7.4, 12.0, 8.7, 4.7, 0.1, 13.4, 496.1);
INSERT INTO Menu(name, class, origin,img) VALUES("통고구마피자",1, "돼지고기: 국내산","pizza_5.png");
INSERT INTO Price(idx,M,L,Big) VALUES(LAST_INSERT_ID(),12000, 14000, 23000);
INSERT INTO Nutrition VALUES(LAST_INSERT_ID(),227.3, 29.9, 7.7, 11.4, 6.9, 3.6, 0.1, 12.8, 381.5);
INSERT INTO Menu(name, class, origin,img) VALUES("포테이토피자",1, "돼지고기: 국내산","pizza_6.png");
INSERT INTO Price(idx,M,L,Big) VALUES(LAST_INSERT_ID(),12000, 14000, 23000);
INSERT INTO Nutrition VALUES(LAST_INSERT_ID(),231.2, 32.4, 1.2, 10.1, 6.8, 3.2, 0.1, 15.2, 420.8);
INSERT INTO Menu(name, class, origin,img) VALUES("블루고르곤졸라피자",1, NULL,"pizza_7.png");
INSERT INTO Price(idx,M,L,Big) VALUES(LAST_INSERT_ID(),13000, 15000, 25000);
INSERT INTO Nutrition VALUES(LAST_INSERT_ID(),286.0, 37.5, 7.2, 12.4, 9.6, 5.8, 0.2, 32.3, 638.9);
INSERT INTO Menu(name, class, origin,img) VALUES("파인애플고구마샐러드피",1, NULL,"pizza_8.png");
INSERT INTO Price(idx,M,L,Big) VALUES(LAST_INSERT_ID(),13000, 15000, 25000);
INSERT INTO Nutrition VALUES(LAST_INSERT_ID(),269.9, 28.6, 6.6, 13.9, 11.1, 4.6, 0.1, 15.5, 355.7);
INSERT INTO Menu(name, class, origin,img) VALUES("칠리핫치킨피자",1, "닭고기: 국내산","pizza_9.png");
INSERT INTO Price(idx,M,L,Big) VALUES(LAST_INSERT_ID(),13000, 15000, 25000);
INSERT INTO Nutrition VALUES(LAST_INSERT_ID(),260.2, 31.0, 4.4, 12.0, 9.8, 5.1, 0.1, 22.5, 490.4);
INSERT INTO Menu(name, class, origin,img) VALUES("베이컨포테이토피자",1, "돼지고기: 국내산, 수입산(독일, 벨기에, 네달란드)","pizza_10.png");
INSERT INTO Price(idx,M,L,Big) VALUES(LAST_INSERT_ID(),15000, 17000, 29000);
INSERT INTO Nutrition VALUES(LAST_INSERT_ID(),237.8, 25.3, 7.1, 13.9, 9.0, 4.5, 0.1, 8.2, 409.7);
INSERT INTO Menu(name, class, origin,img) VALUES("더블스페셜피자",1, "돼지고기: 국내산, 수입산(스페인, 미국, 독일, 벨기에, 네달란드)","pizza_11.png");
INSERT INTO Price(idx,M,L,Big) VALUES(LAST_INSERT_ID(),15000, 17000, 29000);
INSERT INTO Menu(name, class) VALUES("치즈크러스트",1);
INSERT INTO Price(idx,M,L,Big) VALUES(LAST_INSERT_ID(),2000, 2500, 4000);
INSERT INTO Nutrition VALUES(LAST_INSERT_ID(),226.8, 30.7, 1.7, 12.5, 6.0, 2.9, 0.1, 20.3, 509.5);
INSERT INTO Menu(name, class) VALUES("고구마크러스트",1);
INSERT INTO Price(idx,M,L,Big) VALUES(LAST_INSERT_ID(),2000, 2500, 4000);
INSERT INTO Nutrition VALUES(LAST_INSERT_ID(),216.5, 29.2, 6.8, 11.2, 6.1, 3.3, 0.1, 15.8, 479.7);

--chicken
INSERT INTO Menu(name, class, origin) VALUES("후라이드",2, "닭고기: 외국산(브라질 또는 태국산)");
INSERT INTO Price(idx,M,L,Big) VALUES(LAST_INSERT_ID(),3000, 7000, 13000);
INSERT INTO Menu(name, class, origin) VALUES("양념",2, "닭고기: 외국산(브라질 또는 태국산)");
INSERT INTO Price(idx,M,L,Big) VALUES(LAST_INSERT_ID(),3000, 7000, 13000);
INSERT INTO Menu(name, class, origin) VALUES("갈릭",2, "닭고기: 외국산(브라질 또는 태국산)");
INSERT INTO Price(idx,M,L,Big) VALUES(LAST_INSERT_ID(),3000, 7000, 13000);
INSERT INTO Menu(name, class, origin) VALUES("매운갈비맛",2, "닭고기: 외국산(브라질 또는 태국산)");
INSERT INTO Price(idx,M,L,Big) VALUES(LAST_INSERT_ID(),3000, 7000, 13000);

--set
INSERT INTO Menu(name, class, description) VALUES("순살왕특세트",3, "치킨 세 가지 맛(400g씩) + 치즈볼 4 + 보틀넥 감자튀김 + 1.25L 콜라");
INSERT INTO Price(idx,M) VALUES(LAST_INSERT_ID(),27000);
INSERT INTO Menu(name, class, description) VALUES("순살특세트",3, "치킨 두 가지 맛(400g씩) + 치즈볼 2 + 보틀넥 감자튀김 + 500mL 콜라");
INSERT INTO Price(idx,M) VALUES(LAST_INSERT_ID(),18000);
INSERT INTO Menu(name, class, description) VALUES("나홀로세트A",3, "치킨 한 가지 맛(400g) + 치즈볼 2 + 보틀넥 감자튀김 + 캔 콜라");
INSERT INTO Price(idx,M) VALUES(LAST_INSERT_ID(),10000);
INSERT INTO Menu(name, class, description) VALUES("나홀로세트B",3, "치킨 한 가지 맛(400g) + 치즈 오븐 스파게티 + 캔 콜라");
INSERT INTO Price(idx,M) VALUES(LAST_INSERT_ID(),12500);
INSERT INTO Menu(name, class, description) VALUES("A세트",3, "콤비(M) or 불고기(M) + 순살 치킨(중) + 500mL콜라");
INSERT INTO Price(idx,M) VALUES(LAST_INSERT_ID(),18000);
INSERT INTO Menu(name, class, description) VALUES("B세트",3, "포테이토(M) or 고구마(M) + 순살 치킨(대) + 1.25L콜라");
INSERT INTO Price(idx,M) VALUES(LAST_INSERT_ID(),25000);
INSERT INTO Menu(name, class, description) VALUES("C세트",3, "불고기(Big) or 콤비(Big) + 순살 치킨(대) + 1.25L콜라");
INSERT INTO Price(idx,M) VALUES(LAST_INSERT_ID(),35000);
INSERT INTO Menu(name, class, description) VALUES("D세트",3, "콤비(L) or 불고기(L) + 치즈볼 4 + 보틀넥 감자튀김 + 1.25L콜라");
INSERT INTO Price(idx,M) VALUES(LAST_INSERT_ID(),31000);
