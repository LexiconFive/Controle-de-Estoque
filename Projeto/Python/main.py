from PySimpleGUI import PySimpleGUI as sg

sg.theme('dark grey 9')

width = 30
height = 50
layout = [
    [sg.Input('0', size=(int(width / 2), 1), font=('Consolas', 20), key='box'),
     sg.Button('DEL', font=('Consolas', 20), key='backspace'),
     sg.Button('C', size=(int(3), 1), font=('Consolas', 20), key='clear')],
    [sg.Button('7', size=(int(5), 1), font=('Consolas', 20), key='sete'),
     sg.Button('8', size=(int(5), 1), font=('Consolas', 20), key='oito'),
     sg.Button('9', size=(int(5), 1), font=('Consolas', 20), key='nove'),
     sg.Button('X', font=('Consolas', 20), key='multiplicacao'),
     sg.Button('÷', font=('Consolas', 20), key='divisao')
     ],
    [sg.Button('4', size=(int(5), 1), font=('Consolas', 20), key='quatro'),
     sg.Button('5', size=(int(5), 1), font=('Consolas', 20), key='cinco'),
     sg.Button('6', size=(int(5), 1), font=('Consolas', 20), key='seis'),
     sg.Button('+', font=('Consolas', 20), key='soma'),
     sg.Button('-', font=('Consolas', 20), key='subtracao')],
    [sg.Button('1', size=(int(5), 1), font=('Consolas', 20), key='um'),
     sg.Button('2', size=(int(5), 1), font=('Consolas', 20), key='dois'),
     sg.Button('3', size=(int(5), 1), font=('Consolas', 20), key='tres')],
    [sg.Button('0', size=(int(5), 1), font=('Consolas', 20), key='zero'),
     sg.Button('.', size=(int(5), 1), font=('Consolas', 20), key='ponto'),
     sg.Button('=', size=(int(5), 1), font=('Consolas', 20), key='igual')]

]


# window = sg.Window("Calculadora", layout)

# events, values = window.read()

global valorAux


class App:


    def __init__(self):
        self.window = sg.Window('Calculador', layout, return_keyboard_events=False)
        self.result = 0
        self.open = ''
        self.window.read(timeout=1)

    def start(self):

        global valorAux

        while True:

            event, self.values = self.window.read()

            if event == sg.WINDOW_CLOSED:
                break
            if event in 'zero':

                if self.values['box'] == '0':
                    pass
                else:
                    self.window['box'].update(value=self.values['box'] + '0')

            elif event in 'um':

                if self.values['box'] == '0':
                    self.window['box'].update(value='1')
                else:
                    length = len(self.values['box']) + 1
                    if length == 15:
                        pass
                    else:
                        self.window['box'].update(value=self.values['box'] + '1')

            elif event in 'dois':

                if self.values['box'] == '0':
                    self.window['box'].update(value='2')
                else:
                    length = len(self.values['box']) + 1
                    if length == 15:
                        pass
                    else:
                        self.window['box'].update(value=self.values['box'] + '2')

            elif event in 'tres':

                if self.values['box'] == '0':
                    self.window['box'].update(value='3')
                else:
                    length = len(self.values['box']) + 1
                    if length == 15:
                        pass
                    else:
                        self.window['box'].update(value=self.values['box'] + '3')

            elif event in 'quatro':

                if self.values['box'] == '0':
                    self.window['box'].update(value='4')
                else:
                    length = len(self.values['box']) + 1
                    if length == 15:
                        pass
                    else:
                        self.window['box'].update(value=self.values['box'] + '4')

            elif event in 'cinco':

                if self.values['box'] == '0':
                    self.window['box'].update(value='5')
                else:
                    length = len(self.values['box']) + 1
                    if length == 15:
                        pass
                    else:
                        self.window['box'].update(value=self.values['box'] + '5')

            elif event in 'seis':

                if self.values['box'] == '0':
                    self.window['box'].update(value='6')
                else:
                    length = len(self.values['box']) + 1
                    if length == 15:
                        pass
                    else:
                        self.window['box'].update(value=self.values['box'] + '6')

            elif event in 'sete':

                if self.values['box'] == '0':
                    self.window['box'].update(value='7')
                else:
                    length = len(self.values['box']) + 1
                    if length == 15:
                        pass
                    else:
                        self.window['box'].update(value=self.values['box'] + '7')

            elif event in 'oito':

                if self.values['box'] == '0':
                    self.window['box'].update(value='8')
                else:
                    length = len(self.values['box']) + 1
                    if length == 15:
                        pass
                    else:
                        self.window['box'].update(value=self.values['box'] + '8')

            elif event in 'nove':

                if self.values['box'] == '0':
                    self.window['box'].update(value='9')
                else:
                    length = len(self.values['box']) + 1
                    if length == 15:
                        pass
                    else:
                        self.window['box'].update(value=self.values['box'] + '9')

            if event in 'soma':

                self.window['box'].update(value='0')
            elif event in 'subtracao':

                self.window['box'].update(value='0')
            elif event in 'multiplicacao':

                self.window['box'].update(value='0')
            elif event in 'divisao':

                self.window['box'].update(value='0')

            if event in 'clear':
                valor = 0
                self.window['box'].update(value='0')
            elif event in 'backspace':
                self.window['box'].update(value=self.values['box'][:-1])

            if event in 'igual':

                pass


App().start()
