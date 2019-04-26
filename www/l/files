// FILES from IchigoJam BASIC EEPROM | IchigoLatte 0.9
// Copyright (c) 2016 Keiichi SHIGA (BALLOON a.k.a. Fu-sen.)
// The MIT License (MIT) - https://gist.github.com/fu-sen/0dc11ac111b48f7aaaf8

//FILES IchigoJam BASIC

var k,a,p=100,r,d=0,b=0,h=0,l;
var m=0;

log("files>");
k=input();

if(k==0)
{
  k=227;
}

while(p<=k)
{
  a=0x50+b*0x04;
  l=3;

  log(p," ");

  while(l<30)
  {
    i2cw(a,h,l);
    i2cr(a,r);

    if((l==3)*(r==255))
    {
      break;
    }

    if((r==0)+(r==10))
    {
      break;
    }

    log(chr(r));

    l=l+1;
  }
  log("\n");

  p=p+1;
  d=d+1024;

  l=d%256;
  h=(d/256)%65536;
  b=d/65536;

  m=m+1;

  if(m==23)
  {
    log("more>");
    m=input();
    m=0;
  }
}
