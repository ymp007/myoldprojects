package com.example.calculator;

public class Calculator {
    String numberString;
    String detailString;
    double number=0;
    double num1,num2=0;
    String operation="";
    Double memory=0.0;
    int count=0;
    boolean raiseflag = false;
    boolean percentage=false;
    boolean flag = false;
    boolean operatorclick = false;
    boolean dot=false,first = true;
    Calculator(){
        numberString="0";
        detailString="";
    }

    public String getNumberString() {
        return numberString;
    }

    public void setNumberString(String numberString) {
        this.numberString = numberString;
    }

    public String getDetailString() {
        return detailString;
    }

    public void setDetailString(String detailString) {
        this.detailString = detailString;
    }

    void numberClicked(int num){
        if(raiseflag){
            double ans=1;
            for(int i=0;i<num;i++){
                ans = ans*number;
            }
            raiseflag=false;
            number = ans;
            numberString = String.valueOf(number);
            detailString = String.valueOf(number);
        }else if(dot) {
            if(first) {
                first = false;
                number = Double.parseDouble(numberString.substring(0, numberString.length() - 1) + num);
            }else {
                number = Double.parseDouble(numberString + num);
            }
            numberString = String.valueOf(number);
            detailString = getDetailString()+num;
        }else
            {
                operatorclick = false;
                detailString = detailString + num;
                number = number * 10 + num;
                numberString = String.valueOf(number);
            }
    }

    void clearClicked(){
        first = true;
        dot=false;
        count=0;
        numberString="";
        detailString="";
        num1=0;
        num2=0;
        raiseflag = false;
        number=0;
        operation="";
        flag=false;
        percentage=false;
    }


    public String getOperation() {
        return operation;
    }

    public void setOperation(String operation) {
        this.operation = operation;
    }

    void operationClicked(String op){
        dot = false;
        first = true;
        count=0;
        if(!operatorclick){
            operatorclick = true;
        if(!flag) {
            num1 = number;
            operation=op;
            flag=true;
            detailString=getDetailString()+op;
            number=0;
            setNumberString("");
        }else {
            calculation(op);
            operation=op;
        }
        }else if(operation!=op){
            operatorclick = true;
            if(!flag) {
                num1 = number;
                operation=op;
                flag=true;
                detailString=getDetailString()+op;
                number=0;
                setNumberString("");
            }else {
                detailString = getDetailString().substring(0,getDetailString().length()-1)+op;
                operation=op;
            }
        }

    }
    void percentageClicked(){
        detailString = detailString+"%";
        number=number/100;
        percentage=true;
    }
    void equalClicked(){
        //numberString = numberString+"=";
        dot = false;
        first=true;
        count=0;
        switch (operation){
            case "\u00f7":

                num1 = num1/number;
                detailString=getDetailString()+"="+num1;
                numberString=(String.valueOf(num1));
                number=num1;
                break;
            case "x":

                //num1 = num1*number;
                num1 = num1*number;
                detailString=getDetailString()+"="+num1;
                numberString=(String.valueOf(num1));
                number=num1;
                break;
            case "-":
                if(percentage) {
                    num1 = num1 - num1 * number;
                }else{
                    num1=num1-number;
                }
                detailString=getDetailString()+"="+num1;
                numberString=(String.valueOf(num1));
                number=num1;
                break;
            case "+":
                if(percentage) {
                    num1 = num1 + num1 * number;
                }else{
                    num1=num1+number;
                }
                number=num1;
                detailString=getDetailString()+"="+num1;
                numberString=(String.valueOf(num1));
                break;
            default:
                numberString=(String.valueOf(num1));
        }
        operation="";
        flag=false;
    }
    void dotClicked(){

        if(count==0 && numberString.length()>0) {
            detailString = detailString+".";
            dot=true;
            count++;
        }
    }
    void memoryoperationclicked(String ope){
        switch (ope){
            case "M+":
                memory+= Double.parseDouble(numberString);
                break;
            case "M-":
                memory = memory-Double.parseDouble(numberString);
                break;
            case "MR":
                if(memory!=0) {
                    number = memory;
                    numberString = String.valueOf(memory);
                    detailString += numberString;
                }
                break;
            case "MC":
                memory=0.0;
                break;
        }
    }

    public void plusminusClicked() {
        if(number>0){
            number = -number;
            numberString = "-"+numberString;
        }else {
            number = -number;
            numberString = numberString.substring(1);
        }
    }

    public void xraiseClicked() {
        detailString =  detailString+"^";
        raiseflag = true;
    }

    public void calculation(String op){
        switch (operation){
            case "\u00f7":
                detailString=getDetailString()+op;
                num1 = num1/number;
                number=0;
                numberString=(String.valueOf(num1));
                break;
            case "x":
                detailString=getDetailString()+op;
                num1 = num1*number;
                number=0;
                numberString=(String.valueOf(num1));
                break;
            case "-":
                detailString=getDetailString()+op;
                num1 = num1-number;
                number=0;
                numberString=(String.valueOf(num1));
                break;
            case "+":
                detailString=getDetailString()+op;
                num1 = num1+number;
                number=0;
                numberString=(String.valueOf(num1));
                break;
        }
    }
}
