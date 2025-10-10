# ==========================
# CLASSE BASE: PERSONAGEM
# ==========================
class Personagem:
    def __init__(self, nome, pontosDeVida, pontosDeAtaque, pontosDeDefesa):
        self._nome = nome
        self._pontosDeVida = pontosDeVida
        self._pontosDeAtaque = pontosDeAtaque
        self._pontosDeDefesa = pontosDeDefesa

    # ---------- Getters ----------
    def get_nome(self):
        return self._nome

    def get_vida(self):
        return self._pontosDeVida

    def get_ataque(self):
        return self._pontosDeAtaque

    def get_defesa(self):
        return self._pontosDeDefesa

    # ---------- Métodos principais ----------
    def atacar(self, alvo):
        dano = self._pontosDeAtaque - alvo._pontosDeDefesa
        if dano < 0:
            dano = 0
        print(f"{self._nome} ataca {alvo._nome} e causa {dano} de dano!")
        alvo.receberDano(dano)

    def receberDano(self, dano):
        self._pontosDeVida -= dano
        print(f"{self._nome} recebeu {dano} de dano. Vida restante: {self._pontosDeVida}")

    def estaVivo(self):
        return self._pontosDeVida > 0


# ==========================
# CLASSE DERIVADA: HEROI
# ==========================
class Heroi(Personagem):
    def __init__(self, nome, pontosDeVida, pontosDeAtaque, pontosDeDefesa):
        super().__init__(nome, pontosDeVida, pontosDeAtaque, pontosDeDefesa)
        self._nivel = 1
        self._experiencia = 0
        self._inventario = []  # (vamos trocar por classe Inventario depois)

    # ---------- Getters ----------
    def get_nivel(self):
        return self._nivel

    def get_experiencia(self):
        return self._experiencia

    # ---------- Métodos principais ----------
    def ganharExperiencia(self, xp):
        self._experiencia += xp
        print(f"{self._nome} ganhou {xp} de experiência! Total: {self._experiencia}")
        if self._experiencia >= 100:
            self.subirDeNivel()

    def subirDeNivel(self):
        self._nivel += 1
        self._experiencia = 0
        self._pontosDeVida += 10
        self._pontosDeAtaque += 2
        self._pontosDeDefesa += 1
        print(f"{self._nome} subiu para o nível {self._nivel}! Atributos aumentados.")

    def usarItem(self, item):
        print(f"{self._nome} usa {item}. (Função a ser implementada)")
