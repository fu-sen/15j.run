// draw of PONG screen | PanCake / IchigoLatte
// Copyright (c) 2019 Keiichi SHIGA (BALLOON a.k.a. Fu-sen.)
// The MIT License (MIT) - https://gist.github.com/fu-sen/7e55ee56a67e07d804db9379178e3cb5

//PanCake PONG Screen

uart("\n");
video(0);
uart("PC VIDEO 01\n");

uart("PC SPRITE CREATE ");
uart("00 9B\n");
uart("PC SPRITE ROTATE ");
uart("00 01\n");
uart(128,6,8,0,0,rnd(37));
uart("\n");
uart("PC SPRITE CREATE ");
uart("01 9B\n");
uart("PC SPRITE ROTATE ");
uart("01 01\n");
uart(128,6,8,1,72,rnd(37));
uart("\n");
uart("PC SPRITE CREATE ");
uart("02 9D\n");
uart(128,6,8,2);
uart(rnd(80),rnd(45));
uart(128,5,7,3,0xa6+rnd(9));
uart("\n");
uart("PC SPRITE MOVE ");
uart("03 18 00\n");
uart(128,5,7,4,0xA6+rnd(9));
uart("\n");
uart("PC SPRITE MOVE ");
uart("04 34 00\n");
uart("PC SPRITE START 10\n");

while(inkey()==0){}

uart("PC SPRITE START FF\n");
uart("PC VIDEO 00\n");
video(1);
