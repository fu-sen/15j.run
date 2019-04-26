// Output of sprite | PanCake / IchigoLatte
// Copyright (c) 2019 Keiichi SHIGA (BALLOON a.k.a. Fu-sen.)
// The MIT License (MIT) - https://gist.github.com/fu-sen/7e55ee56a67e07d804db9379178e3cb5

//PanCake Output Sprite

var k=48,i,l=0;

uart("\n");

uart("PANCAKE RESET\n");

video(0);
uart("PANCAKE VIDEO 01\n");

uart("PANCAKE SPRITE START ");
uart("1F\n");

while(l<2){
 i=0;

 while(i<10){
  uart("PANCAKE SPRITE ");
  uart("CREATE 0");
  uart(i+48,32,k,i+48,10);

  uart("PANCAKE SPRITE ");
  uart("MOVE 0");
  uart(i+48,32,i/2+48);
  uart((i%2)*8+48);
  uart(" 0E\n");

  i=i+1;
 }

 while(i<16){
  uart("PANCAKE SPRITE ");
  uart("CREATE 0");
  uart(i+55,32,k,i+55,10);

  uart("PANCAKE SPRITE MOVE 0");
  uart(i+55,32,i/2+43);
  uart((i%2)*8+48);
  uart(" 17\n");

  i=i+1;
 }

 l=0;
 while(l==0){
  k=inkey();
  if((k>47)*(k<58)){l=1;}
  if(k==65){l=1;}
  if(k==97){k=k-32;l=1;}
  if((k==32)+(k==10)){l=2;}
 }
}

uart("PANCAKE VIDEO 00\n");
video(1);
