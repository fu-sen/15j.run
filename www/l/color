// Color list | PanCake / IchigoLatte
// Copyright (c) 2019 Keiichi SHIGA (BALLOON a.k.a. Fu-sen.)
// The MIT License (MIT) - https://gist.github.com/fu-sen/7e55ee56a67e07d804db9379178e3cb5

//PanCake Color List

var c=0,x,y,z;

uart("\n");

video(0);
uart("PANCAKE VIDEO 01\n");
uart("PANCAKE CLEAR 00\n");

while(c<16){
 x=(c%4)*20;
 y=(c/4)*11;
 z=0;
 while(z<11){
  uart(128,8,1);
  uart(x);
  uart(y+z);
  uart(x+19);
  uart(y+z);
  uart(c);

  z=z+1;
 }

 c=c+1;
}

while(inkey()==0){}

uart("\n");
uart("PANCAKE VIDEO 00\n");
video(1);
