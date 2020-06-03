package com.example.calculator;

import androidx.appcompat.app.AppCompatActivity;

import android.os.Bundle;
import android.view.View;
import android.view.Window;
import android.widget.Button;
import android.widget.TextView;

public class MainActivity extends AppCompatActivity {

    Calculator calc;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        this.getSupportActionBar().hide();
        setContentView(R.layout.activity_main);
        calc = new Calculator();
    }

    public void numberClicked(View view) {
        int num = Integer.parseInt(((Button)view).getText().toString());
        calc.numberClicked(num);
        updateDisplay();
    }
    public void clearClicked(View view) {
        calc.clearClicked();
        updateDisplay();
    }

    public void plusoperationClicked(View view) {
        calc.operationClicked(((Button)view).getText().toString());
        updateDisplay();
    }
    public void updateDisplay(){

        TextView tv1 = findViewById(R.id.tv1);
        TextView tv2 = findViewById(R.id.tv2);
        tv2.setText(calc.getNumberString());
        tv1.setText(calc.getDetailString());
    }
    public void dotClicked(View view){
        calc.dotClicked();
        updateDisplay();
    }
    public void equalClicked(View view){
        calc.equalClicked();
        updateDisplay();
    }

    public void percentageClicked(View view) {
        calc.percentageClicked();
        updateDisplay();
    }

    public void memoryoperationClicked(View view) {
        calc.memoryoperationclicked(((Button)view).getText().toString());
            updateDisplay();
    }

    public void plusminusClicked(View view) {
        calc.plusminusClicked();
        updateDisplay();
    }

    public void xraiseClicked(View view) {
        calc.xraiseClicked();
    }
}
