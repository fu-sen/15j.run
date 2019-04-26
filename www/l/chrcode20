// Character Code List 20 | IchigoLatte 1.0.0b8+
// Copyright (c) 2019 Keiichi SHIGA (BALLOON a.k.a. Fu-sen.)
// The MIT License (MIT) - https://gist.github.com/fu-sen/7e55ee56a67e07d804db9379178e3cb5

//Character Code List 20

var i=0;

cls();

while(i<256)
{
  lc(i%20+4,i/20+3);
  log(chr(i));

  i=i+1;
}

i=0;

while(i<20)
{
  lc(i+4,0);
  if(i/10==0){log(" ");}
         else{log(i/10);}

  lc(i+4,1);
  log(i%10);

  lc(i+4,2);
  log(chr(145));

  i=i+1;
}

i=0;

while(i<256)
{
  lc(0,i/20+3);
  if(i<10){log(" ");}
  if(i<100){log(" ");}
  log(i);
  log(chr(146));

  i=i+20;
}

lc(3,2); log(chr(152));
lc(2,1); log("\\");
lc(1,0); log("\\");

lc(0,20);
