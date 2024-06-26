from tensorflow.keras.models import load_model
from flask import Flask, render_template, request
import numpy as np

app = Flask(__name__, template_folder='templates')

model1 = load_model("C:/xampp/htdocs/AI_Project_Flask/my_GRU_model.h5",compile=False)
model2 = load_model("C:/xampp/htdocs/AI_Project_Flask/my_LSTM_model.h5",compile=False)
model1.summary()
model2.summary()

@app.route('/')
def index():
    return render_template('main_page.php')

@app.route('/', methods=['POST'])
def getValue():
    n1 = request.form['mx_temp']
    n2 = request.form['mn_temp']
    n3 = request.form['rainfall']
    n4 = request.form['rltv_humid']
    n5 = request.form['cld_cover']
    n6 = request.form['bright_shine']
    n1 = float(n1)
    n2 = float(n2)
    n3 = float(n3)
    n4 = float(n4)
    n5 = float(n5)
    n6 = float(n6)
    arr = np.array([[[n1,n2,n3,n4,n5,n6]]])
    # print(arr)
    pred1 = model1.predict(arr) #GRU prediction
    pred2 = model2.predict(arr) #LSTM prediction
    # result = n1 + n2 + n3 + n4 + n5 + n6
    result1 = float(pred1)
    result2 = float(pred2)
    result1 = round(result1,2)
    result2 = round(result2,2)
    return render_template('output_page.php', res1 = result1, res2 = result2)
    
if __name__ == '__main__':
    app.run(debug=True)