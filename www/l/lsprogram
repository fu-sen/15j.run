// ls | IchigoLatte 0.9
// Copyright (c) 2016 Keiichi SHIGA (BALLOON a.k.a. Fu-sen.)
// The MIT License (MIT) - https://gist.github.com/fu-sen/0dc11ac111b48f7aaaf8

//ls

var k,a,p=0,r,d=0,b=0,h=0,l,m=0;

log("ls>");
k=input();

if(k==0)
{
  k=63;
}

while(p<=k)
{
  a=0x50+b*0x04;
  l=0;

  if(p<10)
  {
    log(" ");
  }

  log(p,":");

  while(l<28)
  {
    i2cw(a,h,l);
    sleep(20);
    i2cr(a,r);

    if((l==0)*(r==255))
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
  d=d+2048;

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