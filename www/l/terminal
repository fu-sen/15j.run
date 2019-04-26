// Terminal | IchigoLatte 1.0.0b8+
// Copyright (c) 2018 Keiichi SHIGA (BALLOON a.k.a. Fu-sen.)
// The MIT License (MIT) - https://gist.github.com/fu-sen/515460ed17a95323b0b8b9cec00de64e

//Terminal
 
var d,c=0;
 
bps(2400);
 
while(1)
{
  d=uart();
  if((d!=-1)*(d!=13))
  {
    if(c==1)
    {
      log(chr(8));
      c=0;
    }
 
    log(chr(d));
  }
  else if((d==-1)*(c==0))
  {
    c=1;
    log(chr(140));
  }
 
  d=inkey();
  if(d==10)
  {
    if(c==1)
    {
      log(chr(8));
      c=0;
    }
 
    // log("\n"); // echo
    uart(13); // CR
    uart(10); // LF
  }
  else if(d!=0)
  {
    if(c==1)
    {
      log(chr(8));
      c=0;
    }
 
    // log(chr(d)); // echo
    uart(d);
  }
}
